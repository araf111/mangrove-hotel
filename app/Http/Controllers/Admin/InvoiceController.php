<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Models\Share;
use App\Models\Project;
use App\Models\Investor;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\InvestorShare;
use App\Models\InvestorProfile;
use App\Http\Controllers\Controller;
use App\Models\InvestorSharePayment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\Traits\InvestorCommon;
use PDF;

class InvoiceController extends Controller
{
    use InvestorCommon;

    public function index()
    {
//        $investors = Investor::where(['investors.active' => 1])
//            ->with(['investorProfile:investor_id,phone,email_primary', 'project:id,name'])
//            ->orderBy('id', 'desc')
//            ->paginate(10);

        $investors = InvestorSharePayment::where(['investors.active' => 1])
        ->select(
            'investor_share_payments.*',
            'investor_share_payments.id as investor_share_payments_id',
            'investor_profiles.*',
            'investors.*',
            'investors.id as investors_account_id',
            'investor_shares.share_id as investor_share_id',
            'projects.name as projectName'
        )
            ->join('investors', 'investors.id', '=', 'investor_share_payments.investor_id')

            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('investor_shares', 'investor_shares.id', '=', 'investor_share_payments.share_id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->orderBy('investor_share_payments.id', 'desc')
            ->where('investor_share_payments.invoiceNo','!=','')
            ->paginate(20);

        return view('admin.invoice.index', compact(['investors']));
    }

    public function create()
    {
        $projects = Project::where(['active' => 1])->orderBy('id', 'desc')->pluck('name', 'id');

        return view('admin.invoice.create', compact(['projects']));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'picture' => 'required|image',
            'email'   =>  ['required', 'string', 'email', 'max:191', 'unique:investors'],
            'password' => ['required', 'string', 'min:8'],
            'project_id' => 'required',
            'phone' => 'required',
            'mobile' => ['required', 'max:18', 'unique:investor_profiles'],
            'emergency_contact' => 'required',
            'email_primary' => 'required',
            'email_secondary' => 'required',
            'date_of_birth' => 'required',
            'identification_number' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'spouse_name' => 'required',
            'spouse_date_of_birth' => 'required',
            'occupation' => 'required',
            'designation' => 'required',
            'company_name' => 'required',
            'address' => '',
            'nominee_name' => 'required',
            'nominee_mobile' => 'required',
            'relation' => 'required',
            'nominee_identity_number' => 'required',
            'share_id' => '',
            'grand_total' => 'required',
            'booking_amount' => 'required',
            'installment_amount' => '',
            'installment_number' => '',
            'bank_name' => '',
            'branch_name' => '',
            'payment_method' => 'required',
            'investor_id' => 'required'
        ]);

        $investorBasicData = Arr::only($validatedData, ['name', 'picture', 'email', 'password', 'project_id','investor_id']);
        $investorProfileData = Arr::except($validatedData, ['name', 'picture', 'email', 'password', 'project_id']);
        $investorAddressData = Arr::only($validatedData, ['address']);
        $investorNomineeData = Arr::only($validatedData, ['nominee_name', 'nominee_mobile', 'relation', 'nominee_identity_number']);
        $investorShareData = Arr::only($validatedData, ['share_id', 'grand_total', 'booking_amount', 'installment_amount', 'installment_number']);
        $investorSharePaymentData = Arr::only($validatedData, ['share_id', 'booking_amount', 'bank_name', 'branch_name', 'payment_method']);

        // create investor basic table data
        $investor = $this->createIvestorBasicData($investorBasicData);



        if ($investor) {

            // create investor profile data
            $investorProfileData['investor_id'] = $investor->id;
            $investorProfile = $this->createIvestorProfileData($investorProfileData);

            if ($investorProfile) {
                // create investor address data
                $investorAddressData['investor_id'] = $investor->id;
                $investorAddress = $this->createIvestorAddress($investorAddressData);
            }

            // create nominee data
            $investorNomineeData['investor_id'] = $investor->id;
            $investorNominee = $this->createIvestorNominee($investorNomineeData);

            // create investor share data
            $investorShareData['investor_id'] = $investor->id;
            $investorShareData['share_number'] = 01;
            $investorShare = $this->createInvestorShare($investorShareData);


            // create investor share payments  data
            $investorSharePaymentData[0]['investor_share_id']   =  $investorShare->id;
            $investorSharePaymentData[0]['investor_id']         =  $investor->id;
            $investorSharePaymentData[0]['amount']              =  $investorSharePaymentData['booking_amount'];
            $investorSharePaymentData[0]['installment']         =  0;
            $investorSharePaymentData[0]['status']              =  'Paid';
            $investorSharePaymentData[0]['share_id']            =  $investorSharePaymentData['share_id'];
            $investorSharePaymentData[0]['bank_name']           =  $investorSharePaymentData['bank_name'];
            $investorSharePaymentData[0]['branch_name']         =  $investorSharePaymentData['branch_name'];
            $investorSharePaymentData[0]['payment_method']      =  $investorSharePaymentData['payment_method'];

            $investorSharePaymentData[1]['investor_share_id']   =  $investorShare->id;
            $investorSharePaymentData[1]['investor_id']         =  $investor->id;
            $investorSharePaymentData[1]['amount']              =  $investorShareData['installment_amount'];
            $investorSharePaymentData[1]['installment']         =  1;
            $investorSharePaymentData[1]['status']              =  'Due';
            $investorSharePaymentData[1]['share_id']            =  $investorSharePaymentData['share_id'];
            $investorSharePaymentData[1]['bank_name']           =  '';
            $investorSharePaymentData[1]['branch_name']         =  '';
            $investorSharePaymentData[1]['payment_method']      =  $investorSharePaymentData['payment_method'];

            unset($investorSharePaymentData['booking_amount']);
            unset($investorSharePaymentData['share_id']);
            unset($investorSharePaymentData['bank_name']);
            unset($investorSharePaymentData['branch_name']);
            unset($investorSharePaymentData['payment_method']);

            $investorSharePayments = $this->createInvestorSharePayments($investorSharePaymentData);
        }

        Session::flash('success', 'Investor Successfully created!');

        return redirect()->route('admin.investors.index');
    }


    public function show($id)
    {
        $investor = InvestorSharePayment::where(['investors.active' => 1])
            ->select(
                'investor_share_payments.*',
                'investor_share_payments.id as investor_share_payments_id',
                'investor_profiles.*',
                'investors.*',
                'investors.name as investor_name',
                'investors.investor_id as investor_own_id',
                'investors.id as investors_account_id',
                'investor_shares.share_id as investor_share_id',
                'projects.name as projectName',
                'projects.address as projectAddress',
                'projects.description as projectDescription',

            )
            ->join('investors', 'investors.id', '=', 'investor_share_payments.investor_id')
            // ->join('investor_addresses', 'investors.id', '=', 'investor_addresses.investor_id')

            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('investor_shares', 'investor_shares.id', '=', 'investor_share_payments.share_id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->where('investor_share_payments.id',$id)
            ->first();

            // dd($investor->id);

            $allShare = InvestorShare::select(
                'investor_shares.*',
            )
            ->where('investor_shares.investor_id',$investor->id)
            ->orderBy('investor_shares.id', 'DESC')
            ->get();

            // dd($allDueShare);
        return view('admin.invoice.show', compact('investor','allShare'));
    }

    public function generatePDF($id){

        $investor = InvestorSharePayment::where(['investors.active' => 1])
            ->select(
                'investor_share_payments.*',
                'investor_share_payments.id as investor_share_payments_id',
                'investor_profiles.*',
                'investors.*',
                'investors.name as investor_name',
                'investors.investor_id as investor_own_id',
                'investors.id as investors_account_id',
                'investor_shares.share_id as investor_share_id',
                'projects.name as projectName',
                'projects.address as projectAddress',
                'projects.description as projectDescription',
                // 'investor_addresses.*'

            )
            ->join('investors', 'investors.id', '=', 'investor_share_payments.investor_id')
            // ->join('investor_addresses', 'investors.id', '=', 'investor_addresses.investor_id')

            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('investor_shares', 'investor_shares.id', '=', 'investor_share_payments.share_id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->where('investor_share_payments.id',$id)
            ->first();

        // dd($investor);
        $pdf=PDF::loadView('admin.invoice.pdf', compact('investor'));
        return $pdf->download('invoice_'.$investor->invoiceNo.'.pdf');
    }

    private function investorCommonData($investorId)
    {
        return Investor::select(
            'investors.*',
            'projects.name as project_name',
            'investor_profiles.*',
            'investor_nominees.*'
        )
            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->where(['investors.id' => $investorId])
            ->first();
    }

    public function investorShare($id)
    {
        $investor = Investor::select(
            'investors.id',
            'investors.investor_id',
            'projects.name as project_name'
        )
            ->with(
                ['shares' => function ($q) {
                    $q->with('payments');
                }]
            )
            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->where(['investors.id' => $id])
            ->first();

        $projects = Project::where(['active' => 1])->orderBy('id', 'desc')->pluck('name', 'id');

        $sharePaymentPaidList = InvestorSharePayment::where('investor_id',$id)->where('installment','<>',0)->where('status','Paid')->orderBy('id', 'DESC')->get();

        return view('admin.investors.investor_share', compact('investor','projects','sharePaymentPaidList'));
    }

    public function invoiceShareStore(Request $request){

        $validateData = $request->validate([
            'investor_id' => '',
            'share_id' => 'required',
            'grand_total' => 'required',
            'booking_amount' => 'required',
            'installment_amount' => '',
            'installment_number' => '',
            'bank_name' => '',
            'branch_name' => '',
            'payment_method' => 'required',
        ]);

        $investorShareData = Arr::only($validateData, ['share_id', 'grand_total', 'booking_amount', 'installment_amount', 'installment_number']);

        // create investor share data
        $investorShareData['investor_id'] = $validateData['investor_id'];
        $investorShareData['share_number'] = 01;
        $investorShare = $this->createInvestorShare($investorShareData);

        // create investor share payments  data
        $investorSharePaymentData[0]['investor_share_id']   =  $investorShare->id;
        $investorSharePaymentData[0]['investor_id']         =  $validateData['investor_id'];
        $investorSharePaymentData[0]['amount']              =  $validateData['booking_amount'];
        $investorSharePaymentData[0]['installment']         =  0;
        $investorSharePaymentData[0]['status']              =  'Paid';
        $investorSharePaymentData[0]['share_id']            =  $validateData['share_id'];
        $investorSharePaymentData[0]['bank_name']           =  $validateData['bank_name'];
        $investorSharePaymentData[0]['branch_name']         =  $validateData['branch_name'];
        $investorSharePaymentData[0]['payment_method']      =  $validateData['payment_method'];

        $investorSharePaymentData[1]['investor_share_id']   =  $investorShare->id;
        $investorSharePaymentData[1]['investor_id']         =  $validateData['investor_id'];
        $investorSharePaymentData[1]['amount']              =  $investorShareData['installment_amount'];
        $investorSharePaymentData[1]['installment']         =  1;
        $investorSharePaymentData[1]['status']              =  'Due';
        $investorSharePaymentData[1]['share_id']            =  1;
        $investorSharePaymentData[1]['bank_name']           =  '';
        $investorSharePaymentData[1]['branch_name']         =  '';
        $investorSharePaymentData[1]['payment_method']      =  $validateData['payment_method'];

        $investorSharePayments = $this->createInvestorSharePayments($investorSharePaymentData);

        Session::flash('success', 'Investor\'s Share  created successfully!');

        return redirect()->route('admin.investor.share',$validateData['investor_id']);
    }

    public function invoiceSharePayment(Request $request){
        $payment_share_ids = json_decode($request->payment_share_ids);

        foreach($payment_share_ids as $payment_share_id){

            $investor_share = InvestorShare::with(
                ['payments' => function($q){
                    return $q->where('installment','<>',0);
                }
            ])
            ->where('id',$payment_share_id)
            ->first();

            // dd($investor_share['payments']);

            $investor_id = $investor_share->investor_id;
            $share_id = $investor_share->share_id;
            $grand_total = $investor_share->grand_total;
            $booking_amount = $investor_share->booking_amount;
            $installment_amount = $investor_share->installment_amount;
            $installmentMoney = $grand_total - $booking_amount;
            $totalPaid = $investor_share['payments']->sum('amount');
            $currentInstallmentNumber = $investor_share['payments'][0]->installment;

            if($installmentMoney > $totalPaid){
                $remainingInstallmentAmount = $installmentMoney - $totalPaid;

                if($remainingInstallmentAmount > $installment_amount){

                    $paidAmount = $installment_amount;
                }else{
                    $paidAmount = $installmentMoney - $remainingInstallmentAmount;
                }
            }
            // dd($paidAmount );
        InvestorSharePayment::where('investor_share_id',$payment_share_id)->update(['status' => 'Paid', 'amount'=> $paidAmount]);

        $investorSharePaymentData[0]['investor_share_id']   =  $payment_share_id;
        $investorSharePaymentData[0]['investor_id']         =  $investor_id;
        $investorSharePaymentData[0]['amount']              =  $installment_amount;
        $investorSharePaymentData[0]['installment']         =  $currentInstallmentNumber++;
        $investorSharePaymentData[0]['status']              =  'Due';
        $investorSharePaymentData[0]['share_id']            =  $share_id;
        $investorSharePaymentData[0]['bank_name']           =  '';
        $investorSharePaymentData[0]['branch_name']         =  '';
        $investorSharePaymentData[0]['payment_method']      =  'Cash';

        $investorSharePayments = $this->createInvestorSharePayments($investorSharePaymentData);

        }

        Session::flash('success', 'Payment successfully!');

        return redirect()->route('admin.investor.share',$investor_id);
    }

    public function edit($id)
    {
        $investor = $this->investorCommonData($id);

        return view('admin.investors.edit', compact(['investor']));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'picture' => 'sometimes|image',
            'email'   =>  '',
            'password' => ['required', 'string', 'min:8'],
            'phone' => 'required',
            'mobile' => '',
            'emergency_contact' => 'required',
            'email_primary' => 'required',
            'email_secondary' => 'required',
            'date_of_birth' => 'required',
            'identification_number' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'spouse_name' => 'required',
            'spouse_date_of_birth' => 'required',
            'occupation' => 'required',
            'designation' => 'required',
            'company_name' => 'required',
            'address' => '',
            'nominee_name' => 'required',
            'nominee_mobile' => 'required',
            'relation' => 'required',
            'nominee_identity_number' => 'required',
            'share_id' => '',
            'installment_amount' => '',
            'installment_number' => '',
            'bank_name' => '',
            'branch_name' => '',
        ]);

        $investorBasicUpateData = Arr::only($validatedData, ['name', 'password']);
        $investorProfileUpdateData = Arr::only(
            $validatedData,
            [
                'phone',
                'mobile',
                'emergency_contact',
                'email_secondary',
                'email_primary',
                'date_of_birth',
                'identification_number',
                'religion',
                'nationality',
                'father_name',
                'mother_name',
                'spouse_name',
                'spouse_date_of_birth',
                'occupation',
                'designation',
                'company_name'
            ]
        );

        $investorAddressUpdateData = Arr::only($validatedData, ['address']);
        $investorNomineeUpdateData = Arr::only($validatedData, ['nominee_name', 'nominee_mobile', 'relation', 'nominee_identity_number']);

        // $investorShareData = Arr::only($validatedData, ['share_id', 'grand_total', 'booking_amount', 'installment_amount', 'installment_number']);
        // $investorSharePaymentData = Arr::only($validatedData, ['share_id', 'grand_total', 'bank_name', 'branch_name', 'payment_method']);

        if ($request->hasFile('picture')) {
            $picture = $request->picture->store('investors');
            Storage::delete($request->old_picture);
            $investorBasicUpateData['picture'] = $picture;
        }

        $investorBasicUpateData['password'] = Hash::make($investorBasicUpateData['password']);

        $investor = $this->updateInvestorBasicData($investorBasicUpateData, $id);

        if ($investor) {
            $this->updateInvestorProfileData($investorProfileUpdateData, $id);

            $this->updateInvestorAddressData($investorAddressUpdateData, $id);

            $this->updateInvestorNomineeData($investorNomineeUpdateData, $id);
        }

        Session::flash('info', 'Investor successfully Updated!');

        return redirect()->route('admin.investors.index');
    }

    public function destroy($id)
    {
        $investor = Investor::find($id);



        if (empty($investor)) {
            Session::flash('info', ' Investor already deleted!');
            return redirect()->route('admin.investors.index');

        }

        $investor->delete($investor);



        Session::flash('info', 'Investor successfully deleted!');

        return redirect()->route('admin.investors.index');
    }
}
