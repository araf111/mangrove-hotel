@extends('admin.layouts.pdf')
@section('title', 'Mangrove Invoice')


@section('content')
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <table width="100%">
            <tr>
                <td style="width:40%;"></td>
                    <td style="width:60%;">
                        <table style="width:100%" style="border:1px solid #000;">
                            <tr>
                                <td style="width:5%">Date
                                    @php
                                    $date = date('d/m/Y',strtotime($investor->created_at));
                                    $d = substr($date,0,2);
                                    $month = substr($date,3,2);
                                    $year = substr($date,6,4);

                                        if(!empty($investor->picture)){
                                        $profile_picture ='storage/'.$investor->picture;
                                        }else{
                                        $profile_picture = asset( 'backend/img/user7-128x128.jpg');
                                        }

                                    @endphp
                                </td>
                                <td><span class="date-box">{{$d}}</span><span class="date-box">{{$month}}</span><span class="date-box">{{$year}}</span>
                                </td>
                                <td></td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td></td>
                                <td style="text-align:left;"><img src="{{asset($profile_picture)}}" width="130px" height="140px"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Client Id:</td>
                                <td class="field-border"><div class="share_id">{{$investor->investor_id}}</div></td>
                                <td><span style="font-size:13px;text-align:left">Share Id:</span></td>
                                <td class="field-border"><div class="share_id">{{$investorsharedata['share_id']}}</div></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:20%;"></td>
            </tr>
        </table>
        <table width="100%">
        <tr>
            <td style="width:20%"></td>
            <td style="width:80%">
                <table>
                    <tr><td class="app-booking-heading">Booking Application Form</td></tr>
                </table>
                <table  style="margin-top: 10px;margin-bottom:10px;">
                    <tr>
                        <td>
                            <table style="margin-top: 10px;margin-bottom:10px;">
                                <tr>
                                    <td   class="bapp-text-lebel" style="margin-top: 40px;margin-bottom:40px;">Applicant's Name</td>
                                    <td class="field-border">{{$investor->name}}</td>
                                </tr>
                            </table>
                        </td>


                    </tr>
                    <tr > <td>
                        <table style="margin-top: 10px;margin-bottom:10px;">
                            <tr>
                                <td  class="bapp-text-lebel" style="margin-top: 40px;margin-bottom:40px;">Project's Name</td>
                                <td class="field-border">{{$investor->project_name}}</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    <tr > <td>
                        <table style="margin-top: 10px;margin-bottom:10px;">
                            <tr>
                                <td  class="bapp-text-lebel" style="margin-top: 10px;margin-bottom:10px;padding-top: 10px;padding-bottom:10px;">Project's Address</td>
                                <td class="field-border">{{$investor->project_address}}</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
            </tr>
        </table>

        <table width="100%">
        <tr>
            <td style="width:20%"></td>
            <td style="width:80%">
                <table>
                    <tr><td class="app-share-heading">Application Booking of Shares</td></tr>
                </table>
                <table>
                    <tr  width="100%" style="width:100%;margin-top: 10px;margin-bottom:10px;">
                        <td class="bapp-text-lebel">Grand Total Price</td>
                        <td class="field-border">{{$investorsharedata['grand_total']}}</td>
                        <td class="bapp-text-lebel">Membership Type</td>
                        <td class="field-border">{{$investorsharedata['membership_type']}}</td>
                    </tr>
                    <tr  width="100%" style="width:100%;margin-top: 10px;margin-bottom:10px;">
                        <td class="bapp-text-lebel">In Word</td>
                        <td class="field-border">Two Core one Thousand</td>
                        <td class="bapp-text-lebel">Room Type</td>
                        <td class="field-border">{{$investorsharedata['room_type']}}</td>
                    </tr>
                    <tr  width="100%" style="width:100%;margin-top: 10px;margin-bottom:10px;">
                        <td class="bapp-text-lebel">Booking Payment(TK.)</td>
                        <td class="field-border">{{$investorsharedata['booking_amount']}}</td>
                        <td class="bapp-text-lebel">Mode of Payment</td>
                        <td class="field-border">{{$investorsharepaymentdata['payment_method']}}</td>
                    </tr>
                    <tr  width="100%" style="width:100%;margin-top: 10px;margin-bottom:10px;">
                        @php
                            $share_create_date = date('d/m/Y',strtotime($investorsharedata['booking_amount']));
                        @endphp
                        <td class="bapp-text-lebel">cheque or Transation No.</td>
                        <td class="field-border">{{$investorsharepaymentdata['bank_transation_id']}}</td>
                        <td class="bapp-text-lebel">Dated</td>
                        <td class="field-border">{{$share_create_date}}</td>
                    </tr>
                    <tr  width="100%" style="width:100%;margin-top: 10px;margin-bottom:10px;">
                        <td class="bapp-text-lebel">Bank Name</td>
                        <td class="field-border">{{$investorsharepaymentdata['bank_name']}}</td>
                        <td class="bapp-text-lebel">Branch</td>
                        <td class="field-border">{{$investorsharepaymentdata['branch_name']}}</td>
                    </tr>
                </table>
            </td>
            </tr>
        </table>
        <table width="100%">

            <tr style="padding-top:0px;margin:0;"><td class="for-official-heading">For Official Use Only</td></tr>
            <tr>
               <td>
                   <table width="100%" style="padding-top:0px;margin:0;">
                       <tr style="padding-top:0px;margin:0;">
                           <td style="padding-top:0px;margin:0;">
                               <table width="100%" style="padding-top:0px;margin:0;">
                                   <tr>
                                       <td class="official-lebel">Payment Shedule Mode</td>
                                       <td class="field-border">{{$investor->payment_shedule_mode}}</td>
                                   </tr>
                               </table>
                               <table width="100%" style="padding-top:0px;margin:0;">
                                   <tr>
                                       <td class="official-lebel">No. Of Slots/Shares</td>
                                       <td class="field-border">{{$investor->num_slot_share}}</td>
                                       <td class="official-lebel" style="width:5%">Stay Facility</td>
                                       <td><span class="box-val">{{$investor->stay_day}}</span><span class="box-label">Days</span><span class="box-val">{{$investor->stay_night}}</span><span class="box-label">Night</span></td>
                                   </tr>
                               </table>

                               <table width="100%">
                                   <tr>
                                       <td class="official-lebel">Down Payment</td>
                                       <td class="field-border">{{$investor->down_payment}}</td>
                                       <td class="official-lebel" style="text-align:right;">No. Of EMI</td>
                                       <td class="field-border">{{$investor->emi_number}}</td>
                                       <td class="official-lebel" style="text-align:right;">EMI Amount</td>
                                       <td class="field-border">{{$investor->emi_amount}}</td>
                                   </tr>
                               </table>

                               <table width="100%">
                                   <tr>
                                       <td class="official-lebel">Money Receipt No.</td>
                                       <td class="field-border">{{$investor->money_receipt_no}}</td>
                                       <td class="official-lebel">Installment Date</td>
                                       <td class="field-border">{{$investor->installment_date}}</td>
                                   </tr>
                               </table>
                               <table width="100%">
                                   <tr>
                                       <td class="official-lebel">Marketing Person's(Dealing Person)</td>
                                       <td class="field-border">{{$investor->dealing_person}}</td>
                                   </tr>
                               </table>
                               <table width="100%">
                                   <tr>
                                       <td class="official-lebel">Designation</td>
                                       <td class="field-border">{{$investor->dealing_person_designation}}</td>
                                       <td class="official-lebel" style="text-align:right;">Office Id</td>
                                       <td class="field-border">{{$investor->dealing_person_office_id}}</td>
                                   </tr>
                               </table>
                           </td>
                           <td>
                               <table width="100%">
                                   <tr>
                                       <td class="official-lebel">Owner's Id No.</td>
                                       <td class="field-border">{{$investor->owner_id_no}}</td>
                                   </tr>
                               </table>

                               <table width="100%">
                                   <tr>
                                       <td class="official-lebel">Special Note</td>
                                   </tr>
                                   <tr>
                                       <td class="field-border" style="height:200px;vertical-align:top;">
                                           {{$investor->special_note}}</td>
                                   </tr>
                               </table>
                           </td>
                       </tr>

                   </table>
               </td>
            </tr>
        </table>

        <footer class="main-footer" style="margin-top: 70px;margin-bottom:10px;">
            <strong>Copyright &copy; 2020<a href="http://mangrove-hotel.com"> Mangrove-hotel</a>.</strong> All rights reserved.
        </footer>
        <div class="second-page-wrapper" style="width: 100%;margin-top:120px;">
            <h2 class="second-page-header text-right">Applicant's Personal Information</h2>
            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">Country Phone</td>
                    <td class="field-border">{{$investor->phone}}</td>
                    <td class="personal-inform-lebel">Mobile</td>
                    <td class="field-border">{{$investor->mobile }}</td>
                    <td class="personal-inform-lebel">Emergency Contract</td>
                    <td class="field-border">{{$investor->emergency_contact}}</td>
                </tr>
            </table>
            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">Email</td>
                    <td class="field-border">{{$investor->email_primary}}</td>
                    <td class="personal-inform-lebel">Date of Birth</td>
                    <td class="field-border">{{$investor->date_of_birth}}</td>
                </tr>
            </table>
            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">NID/Passport</td>
                    <td class="field-border">{{$investor->identification_number}}</td>
                    <td class="personal-inform-lebel">Religion</td>
                    <td class="field-border">{{$investor->religion}}</td>
                    <td class="personal-inform-lebel">Nationality</td>
                    <td class="field-border">{{$investor->nationality}}</td>
                </tr>
            </table>

            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">Father's Name</td>
                    <td class="field-border">{{$investor->father_name}}</td>
                    <td class="personal-inform-lebel">Mother's Name</td>
                    <td class="field-border">{{$investor->mother_name}}</td>
                </tr>
            </table>

            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">Spouse's Name</td>
                    <td class="field-border">{{$investor->spouse_name}}</td>
                    <td class="personal-inform-lebel">Date Of Birth</td>
                    <td class="field-border">{{$investor->spouse_date_of_birth}}</td>
                </tr>
            </table>

            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">Occupation</td>
                    <td class="field-border">{{$investor->occupation}}</td>
                    <td class="personal-inform-lebel">Degination</td>
                    <td class="field-border">{{$investor->designation}}</td>
                    <td class="personal-inform-lebel">Company Name</td>
                    <td class="field-border">{{$investor->company_name}}</td>
                </tr>
            </table>

            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">Office Address</td>
                    <td class="field-border">{{$investor->address}}</td>
                </tr>
                <tr>
                    <td class="personal-inform-lebel">Mailing Address</td>
                    <td class="field-border">{{$investor->mailing_address}}</td>
                </tr>
                <tr>
                    <td class="personal-inform-lebel">Permanent Address</td>
                    <td class="field-border">{{$investor->peraddress}}</td>
                </tr>
            </table>

            <table style="width:100%">
                <tr>
                    <td class="personal-inform-lebel">Nominee's Name</td>
                    <td class="field-border">{{$investor->nominee_name}}</td>
                    <td class="personal-inform-lebel">Relation</td>
                    <td class="field-border">{{$investor->relation}}</td>
                </tr>
                <tr>
                    <td class="personal-inform-lebel">Nominee's Id</td>
                    <td class="field-border">{{$investor->nominee_identity_number}}</td>
                    <td class="personal-inform-lebel">Mobile</td>
                    <td class="field-border">{{$investor->nominee_mobile}}</td>
                </tr>
            </table>
        </div>
        <table style="width:100%">
            <tr>
                <td class="personal-inform-lebel">Applicant's Name</td>
                <td class="field-border">{{$investor->name}}</td>
            </tr>
        </table>
        <table style="width:100%">
            <tr>
                <td class="personal-inform-lebel">Applicant's Signature</td>
                <td class="field-border">Signature</td>
                <td class="personal-inform-lebel">Date</td>
                <td class="field-border">Signature Date</td>
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:200px;height:100px;vertical-align:bottom;border:1px solid;text-align:center">
                <p>{{$investor->dealing_person}}</p>
                <p>{{$investor->dealing_person_designation}}</p>
                <p>{{$investor->dealing_person_office_id}}</p>
                Applicant's Signature
                </td>
                <td style="width:200px;height:100px;vertical-align:bottom;border:1px solid;text-align:center">Checked By</td>
                <td style="width:300px;height:100px;vertical-align:bottom;border:1px solid;text-align:center">Chirman/CEO/MD/Director</td>
            </tr>
        </table>
    </section>
    <footer class="main-footer" style="margin-top: 50px;">
        <strong>Copyright &copy; 2020<a href="http://mangrove-hotel.com"> Mangrove-hotel</a>.</strong> All rights reserved.
    </footer>
@endsection
@push('scripts')

@endpush

