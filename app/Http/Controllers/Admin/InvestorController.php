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
use App\Models\OfficeUseOnly;
use App\Http\Controllers\Controller;
use App\Models\InvestorSharePayment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\Traits\InvestorCommon;
use PDF;

class InvestorController extends Controller
{
    use InvestorCommon;


    public function index()
    {
        // dd('hi');
//        $investors = Investor::where(['investors.active' => 1])
//            ->with(['investorProfile:investor_id,phone,email_primary', 'project:id,name'])
//            ->orderBy('id', 'desc')
//            ->paginate(10);

        // \DB::connection()->enableQueryLog();
        $investors = Investor::where(['investors.active' => 1])
        ->select(
            'investors.*'
        )
            ->with(
                ['shares' => function ($q) {
                    $q->with('payments');
                }]
            )
            ->with(['investorProfile:investor_id,phone,email_primary', 'project:id,name'])
            ->with(['sharePayments'])
            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->orderBy('id', 'desc')
            ->paginate(10);

            // $queries = \DB::getQueryLog();
            // return dd($queries);exit;
             // \DB::connection()->enableQueryLog();
            //  dd($investors);

        return view('admin.investors.index', compact(['investors']));
    }

    public function create()
    {
        $projects = Project::where(['active' => 1])->orderBy('id', 'desc')->pluck('name', 'id');

        return view('admin.investors.create', compact(['projects']));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'picture' => '',
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
            'address' => 'required',
            'address' => '',
            'peraddress' => '',
            'mailing_address' => 'required',
            'nominee_name' => 'required',
            'nominee_mobile' => 'required',
            'relation' => 'required',
            'nominee_identity_number' => 'required',
            'share_id' => '',
            'grand_total' => 'required',
            'booking_amount' => 'required',
            'installment_amount' => '',
            'installment_number' => '',
            'membership_type' => 'required',
            'room_type' => '',
            'bank_name' => '',
            'branch_name' => '',
            'payment_method' => 'required',
            'bank_transation_id' => '',
            'investor_id' => 'required',
            'payment_shedule_mode' => 'required',
            'num_slot_share' => '',
            'stay_day' => '',
            'stay_night' => '',
            'down_payment' => '',
            'emi_number' => '',
            'emi_amount' => '',
            'money_receipt_no' => '',
            'installment_date' => 'required',
            'dealing_person' => '',
            'dealing_person_designation' => '',
            'dealing_person_office_id' => '',
            'owner_id_no' => 'required',
            'special_note' => '',

        ]);

        $investorBasicData = Arr::only($validatedData, ['name', 'picture', 'email', 'password', 'project_id','investor_id','address','peraddress','mailing_address','country']);
        $investorProfileData = Arr::except($validatedData, ['name', 'picture', 'email', 'password', 'project_id']);
        $investorAddressData = Arr::only($validatedData, ['address']);
        $investorNomineeData = Arr::only($validatedData, ['nominee_name', 'nominee_mobile', 'relation', 'nominee_identity_number']);
        $investorShareData = Arr::only($validatedData, ['share_id', 'grand_total', 'booking_amount', 'installment_amount', 'installment_number','membership_type','room_type']);
        $investorSharePaymentData = Arr::only($validatedData, ['share_id', 'booking_amount', 'bank_name', 'branch_name', 'payment_method','bank_transation_id']);
        $investorinformationforoffice = Arr::only($validatedData, ['payment_shedule_mode', 'num_slot_share', 'stay_day', 'stay_night', 'down_payment','emi_number','emi_amount','money_receipt_no','installment_date',
        'dealing_person','dealing_person_designation','dealing_person_office_id','owner_id_no','special_note']);


        // create investor basic table data

        $investor = $this->createIvestorBasicData($investorBasicData);

        // dd($investor);
        // echo "Yes Here Now";exit;

        if ($investor) {

            // create investor profile data
            $investorProfileData['investor_id'] = $investor->id;
            $investorProfile = $this->createIvestorProfileData($investorProfileData);

            // create investor profile data
            $investorinformationforoffice['investor_id'] = $investor->id;
            $investorOfficeUseOnly = $this->createOfficialUseOnlyData($investorinformationforoffice);

            if ($investorProfile) {
                // create investor address data
                $investorAddressData['investor_id'] = $investor->id;
              //  $investorAddress = $this->createIvestorAddress($investorAddressData);
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
            $investorSharePaymentData[0]['bank_transation_id']      =  $investorSharePaymentData['bank_transation_id'];
            $investorSharePaymentData[0]['invoiceNo']           = $investor->id;

            $investorSharePaymentData[1]['investor_share_id']   =  $investorShare->id;
            $investorSharePaymentData[1]['investor_id']         =  $investor->id;
            $investorSharePaymentData[1]['amount']              =  $investorShareData['installment_amount'];
            $investorSharePaymentData[1]['installment']         =  1;
            $investorSharePaymentData[1]['status']              =  'Due';
            $investorSharePaymentData[1]['share_id']            =  $investorSharePaymentData['share_id'];
            $investorSharePaymentData[1]['bank_name']           =  '';
            $investorSharePaymentData[1]['branch_name']         =  '';
            $investorSharePaymentData[1]['payment_method']      =  $investorSharePaymentData['payment_method'];
            $investorSharePaymentData[1]['bank_transation_id']      =  $investorSharePaymentData['bank_transation_id'];
            $investorSharePaymentData[1]['invoiceNo']           = $investor->id;

            unset($investorSharePaymentData['booking_amount']);
            unset($investorSharePaymentData['share_id']);
            unset($investorSharePaymentData['bank_name']);
            unset($investorSharePaymentData['branch_name']);
            unset($investorSharePaymentData['payment_method']);
            unset($investorSharePaymentData['bank_transation_id']);
            // unset($investorSharePaymentData['invoiceNo']);
            // exit;

            $investorSharePayments = $this->createInvestorSharePayments($investorSharePaymentData);
        }

        Session::flash('success', 'Investor Successfully created!');

        return redirect()->route('admin.investors.index');
    }


    public function show($id)
    {
        $investor = $this->investorCommonData($id);
        // dd($investor);
        return view('admin.investors.show', compact('investor'));
    }

    private function investorCommonData($investorId)
    {
        // echo $investorId;
        // exit;
        \DB::connection()->enableQueryLog();
        return Investor::select(

            'projects.name as project_name','projects.address as project_address',
            'investor_profiles.*',
            'investor_nominees.*',
             'investors.*',
             'office_use_onlies.*',
            'investors.investor_id as investor_id',
            'investors.id as iid',
            'investor_profiles.id as investor_profiles_id',
            'investor_nominees.id as investor_nominees_id',
            'office_use_onlies.id as office_use_onlies_id',

            'investors.id as id',
        )
            ->with(
                ['shares' => function ($q) {
                    $q->with('Payments');
                }]
            )
            ->with(['sharePayments'])
            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('office_use_onlies', 'investors.id', '=', 'office_use_onlies.investor_id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->where(['investors.id' => $investorId])
            ->first();

            // $queries = \DB::getQueryLog();
            // return dd($queries);exit;

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

    public function investorShareStore(Request $request){
        // dd($request);
        $validateData = $request->validate([
            'investor_id' => '',
            'share_id' => 'required',
            'membership_type' => 'required',
            'room_type' => '',
            'grand_total' => 'required',
            'inword' => '',
            'booking_amount' => 'required',
            'installment_amount' => '',
            'installment_number' => '',
            'bank_name' => '',
            'branch_name' => '',
            'payment_method' => 'required',
            'bank_transation_id' => '',
            'invoiceNo' => '',
        ]);

        $investorShareData = Arr::only($validateData, ['share_id', 'grand_total', 'booking_amount', 'installment_amount', 'installment_number','membership_type','room_type','inword']);

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
        $investorSharePaymentData[0]['bank_transation_id']  =  $validateData['bank_transation_id'];
        $investorSharePaymentData[0]['invoiceNo']           =  '00';

        $investorSharePaymentData[1]['investor_share_id']   =  $investorShare->id;
        $investorSharePaymentData[1]['investor_id']         =  $validateData['investor_id'];
        $investorSharePaymentData[1]['amount']              =  $investorShareData['installment_amount'];
        $investorSharePaymentData[1]['installment']         =  1;
        $investorSharePaymentData[1]['status']              =  'Due';
        $investorSharePaymentData[1]['share_id']            =  1;
        $investorSharePaymentData[1]['bank_name']           =  '';
        $investorSharePaymentData[1]['branch_name']         =  '';
        $investorSharePaymentData[1]['payment_method']      =  $validateData['payment_method'];
        $investorSharePaymentData[1]['bank_transation_id']  =  $validateData['bank_transation_id'];
        $investorSharePaymentData[1]['invoiceNo']           =  '00';

        $investorSharePayments = $this->createInvestorSharePayments($investorSharePaymentData);

        Session::flash('success', 'Investor\'s Share  created successfully!');

        return redirect()->route('admin.investor.share',$validateData['investor_id']);
    }

    public function investorSharePayment(Request $request){
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
        $investorSharePaymentData[0]['investor_id'] = $investor->id;

        $investorSharePayments = $this->createInvestorSharePayments($investorSharePaymentData);

        }

        Session::flash('success', 'Payment successfully!');

        return redirect()->route('admin.investor.share',$investor_id);
    }

    public function edit($id)
    {
        $investorsharedata = array();
        $investorsharepaymentdata = array();
        // echo $id;
        $investor = $this->investorCommonData($id);

        // dd($investor);exit;

        $investorsharedata['id'] = $investor->shares[0]->id;
        $investorsharedata['membership_type'] = $investor->shares[0]->membership_type;
        $investorsharedata['investor_id'] = $investor->shares[0]->investor_id;
        $investorsharedata['share_id'] = $investor->shares[0]->share_id;
        $investorsharedata['share_number'] = $investor->shares[0]->share_number;
        $investorsharedata['room_type'] = $investor->shares[0]->room_type;
        $investorsharedata['grand_total'] = $investor->shares[0]->grand_total;
        $investorsharedata['booking_amount'] = $investor->shares[0]->booking_amount;
        $investorsharedata['installment_amount'] = $investor->shares[0]->installment_amount;

        $investorsharepaymentdata['id'] = $investor->sharePayments[0]->id;
        $investorsharepaymentdata['investor_share_id'] = $investor->sharePayments[0]->investor_share_id;
        $investorsharepaymentdata['investor_id'] = $investor->sharePayments[0]->investor_id;
        $investorsharepaymentdata['share_id'] = $investor->sharePayments[0]->share_id;
        $investorsharepaymentdata['invoiceNo'] = $investor->sharePayments[0]->invoiceNo;
        $investorsharepaymentdata['amount'] = $investor->sharePayments[0]->amount;
        $investorsharepaymentdata['installment'] = $investor->sharePayments[0]->installment;
        $investorsharepaymentdata['payment_method'] = $investor->sharePayments[0]->payment_method;
        $investorsharepaymentdata['bank_transation_id'] = $investor->sharePayments[0]->bank_transation_id;
        $investorsharepaymentdata['status'] = $investor->sharePayments[0]->status;

        return view('admin.investors.edit', compact(['investor','investorsharedata','investorsharepaymentdata']));
    }

    public function update(Request $request, $id)
    {
        // echo $request->share_id;
       $share_id = request('share_id');
       $share_payment_id = request('share_payment_id');
        // $id = 16;
        $validatedData = $request->validate([
            'name' => 'required',
            'picture' => '',
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
            'peraddress' => '',
            'mailing_address' => 'required',
            'nominee_name' => 'required',
            'nominee_mobile' => 'required',
            'relation' => 'required',
            'nominee_identity_number' => 'required',
            'share_id' => '',
            'installment_amount' => '',
            'installment_number' => '',
            'membership_type' => 'required',
            'payment_method' => '',
            'bank_transation_id' => '',
            'room_type' => '',
            'bank_name' => '',
            'branch_name' => '',
            'payment_shedule_mode' => 'required',
            'num_slot_share' => '',
            'stay_day' => '',
            'stay_night' => '',
            'down_payment' => '',
            'emi_number' => '',
            'emi_amount' => '',
            'money_receipt_no' => '',
            'installment_date' => 'required',
            'dealing_person' => '',
            'dealing_person_designation' => '',
            'dealing_person_office_id' => '',
            'owner_id_no' => 'required',
            'special_note' => '',
        ]);

        $investorBasicUpateData = Arr::only($validatedData, ['name', 'password','address','peraddress','mailing_address']);
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
        $updateOfficeUseOnlyData = Arr::only($validatedData, ['payment_shedule_mode', 'num_slot_share', 'stay_day', 'stay_night', 'down_payment','emi_number','emi_amount','money_receipt_no','installment_date',
        'dealing_person','dealing_person_designation','dealing_person_office_id','owner_id_no','special_note']);

        $investorShareData = Arr::only($validatedData, ['share_id', 'grand_total', 'booking_amount', 'installment_amount', 'installment_number','membership_type','room_type']);

        $investorSharePaymentData = Arr::only($validatedData, ['share_id', 'grand_total', 'bank_name', 'branch_name', 'payment_method','bank_transation_id']);

        if ($request->hasFile('picture')) {
            $picture = $request->picture->store('investors');
            Storage::delete($request->old_picture);
            $investorBasicUpateData['picture'] = $picture;
        }

        $investorBasicUpateData['password'] = Hash::make($investorBasicUpateData['password']);

        // dd($updateOfficeUseOnlyData);exit;

        $investor = $this->updateInvestorBasicData($investorBasicUpateData, $id);

        if ($investor) {

            $this->updateOfficeUseOnlyData($updateOfficeUseOnlyData, $id);
            $this->updateInvestorShareData($investorShareData, $share_id);
            $this->updateInvestorSharePaymentData($investorSharePaymentData, $share_payment_id);

            $this->updateInvestorProfileData($investorProfileUpdateData, $id);

            // $this->updateInvestorAddressData($investorAddressUpdateData, $id);

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

    public function generateinvoicePDF($id){

            \DB::connection()->enableQueryLog();
            $investorsharedata = array();
            $investorsharepaymentdata = array();
            // echo $id;
            $investor = $this->investorCommonData($id);

            // dd($investor);

            $investorsharedata['id'] = $investor->shares[0]->id;
            $investorsharedata['membership_type'] = $investor->shares[0]->membership_type;
            $investorsharedata['investor_id'] = $investor->shares[0]->investor_id;
            $investorsharedata['share_id'] = $investor->shares[0]->share_id;
            $investorsharedata['share_number'] = $investor->shares[0]->share_number;
            $investorsharedata['room_type'] = $investor->shares[0]->room_type;
            $investorsharedata['grand_total'] = $investor->shares[0]->grand_total;
            $investorsharedata['booking_amount'] = $investor->shares[0]->booking_amount;
            $investorsharedata['installment_amount'] = $investor->shares[0]->installment_amount;
            $investorsharedata['created_at'] = $investor->shares[0]->created_at;

            $investorsharepaymentdata['id'] = $investor->sharePayments[0]->id;
            $investorsharepaymentdata['investor_share_id'] = $investor->sharePayments[0]->investor_share_id;
            $investorsharepaymentdata['investor_id'] = $investor->sharePayments[0]->investor_id;
            $investorsharepaymentdata['share_id'] = $investor->sharePayments[0]->share_id;
            $investorsharepaymentdata['invoiceNo'] = $investor->sharePayments[0]->invoiceNo;
            $investorsharepaymentdata['amount'] = $investor->sharePayments[0]->amount;
            $investorsharepaymentdata['installment'] = $investor->sharePayments[0]->installment;
            $investorsharepaymentdata['bank_name'] = $investor->sharePayments[0]->bank_name;
            $investorsharepaymentdata['branch_name'] = $investor->sharePayments[0]->branch_name;
            $investorsharepaymentdata['payment_method'] = $investor->sharePayments[0]->payment_method;
            $investorsharepaymentdata['bank_transation_id'] = $investor->sharePayments[0]->bank_transation_id;
            $investorsharepaymentdata['status'] = $investor->sharePayments[0]->status;

        // $queries = \DB::getQueryLog();
        // return dd($queries);exit;
        $pdf=PDF::loadView('admin.investors.pdf', compact('investor','investorsharedata','investorsharepaymentdata'));
        return $pdf->download('invoice_'.$investor->investor_id.'.pdf');
    }
}
