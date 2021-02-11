<?php

namespace App\Console\Commands;

use App\Models\AdnSmsNotification;
use App\Models\InvestorSharePayment;
use Carbon\Carbon;
use PDF;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendInvoice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id=1;
        $investores = InvestorSharePayment::where(['investors.active' => 1])
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
                'investor_share_payments.status as paymentStatus',
                'investor_share_payments.id as investor_share_payments_id',
                'investor_share_payments.id as id'

            )
            ->join('investors', 'investors.id', '=', 'investor_share_payments.investor_id')

            ->join('investor_profiles', function ($join) {
                $join->on('investors.id', '=', 'investor_profiles.investor_id');
            })
            ->join('projects', 'investors.project_id', '=', 'projects.id')
            ->join('investor_shares', 'investor_shares.id', '=', 'investor_share_payments.investor_share_id')
            ->join('investor_nominees', 'investors.id', '=', 'investor_nominees.investor_id')
            ->where('investor_share_payments.status','Due')
            ->whereDate('installment_at', '=', Carbon::now()->format('Y-m-d'))
            ->get();

        foreach ($investores as $investor) {
            echo "\n".$investor->investor_share_payments_id;
            echo "\n".$investor->paymentStatus;
            $investor->invoiceNo=$investor->investor_own_id.'_'.$investor->investor_share_id.'_'.str_replace("-","",Date('Y-m-d'));
            $investor->save();
        }
        foreach ($investores as $investor){

            $pdf=PDF::loadView('admin.invoice.pdf', compact('investor'));
echo 'mobile=>'.$investor->mobile;
            $titleMessage = "Invoice#".$investor->invoiceNo.' from mangrove due on '.$investor->installment_at;
            $recipient=$investor->mobile;       // For SINGLE_SMS or OTP
            $requestType = 'SINGLE_SMS';    // options available: "SINGLE_SMS", "OTP"
            $messageType = 'TEXT';         // options available: "TEXT", "UNICODE"

            $adnSmsNotification=new AdnSmsNotification();
            $adnSmsNotification->sendSms($requestType, $titleMessage, $recipient, $messageType);

            $data = array(
                'name'=>$investor->investor_name,
                'invoiceDate'=>$investor->installment_at,
                'invoiceNumber'=>$investor->invoiceNo
            );
            Mail::send('mail', $data, function($message) use($data,$pdf,$investor,$titleMessage) {
                $message->to($investor->email, $investor->investor_name)->subject
                ($titleMessage);
                $message->attachData($pdf->output(), "invoice_".$investor->invoiceNo.'_'.$investor->investor_name.".pdf");
                $message->from('ashaduzzaman89@gmail.com','Ashaduzzaman');
            });
            echo "Email Sent with attachment. Check your inbox.";
        }

    }
}
