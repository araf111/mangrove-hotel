
<?php $__env->startSection('title', 'Mangrove Invoice'); ?>


<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <table width="100%">
            <tr>
                <td style="width:40%;"></td>
                    <td style="width:50%;">
                        <table style="width:100%" style="border:1px solid #000;">
                            <tr style="padding-bottom:20px;">
                                <td style="width:18.5%;text-align:right;">Date:
                                    <?php
                                    $date = date('d/m/Y',strtotime($investor->created_at));
                                    $d = substr($date,0,2);
                                    $month = substr($date,3,2);
                                    $year = substr($date,6,4);

                                        if(!empty($investor->picture)){
                                        $profile_picture ='storage/'.$investor->picture;
                                        }else{
                                        $profile_picture = asset( 'backend/img/user7-128x128.jpg');
                                        }

                                    ?>
                                </td>
                                <td><span class="date-box"><?php echo e($d); ?></span><span class="date-box"><?php echo e($month); ?></span><span class="date-box"><?php echo e($year); ?></span>
                                </td>
                                <td></td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td></td>
                                <td style="text-align:left;padding-bottom:7px"><img src="<?php echo e(asset($profile_picture)); ?>" width="110px" height="130px">
                                </td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>Client Id:</td>
                                <td class="field-border"><div class="share_id"><?php echo e($investor->investor_id); ?></div></td>
                                <td><span style="font-size:13px;text-align:left">Share Id:</span></td>
                                <td class="field-border"><div class="share_id"><?php echo e($investorsharedata['share_id']); ?></div></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                <td style="width:10%;"></td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td style="width:30%"></td>
                <td style="width:70%">
                    <table style="margin:6px 0px;">
                        <tr><td class="app-booking-heading">Booking Application Form</td></tr>
                    </table>
                    <table style="width:100%" cellspacing="6px;">
                        <tr>
                            <td class="bapp-fr-text-lebel">Applicant's Name</td>
                            <td class="field-border"><?php echo e($investor->name); ?></td>
                        </tr>
                        <tr>
                            <td class="bapp-fr-text-lebel">Project's Name</td>
                            <td class="field-border"><?php echo e($investor->project_name); ?></td>
                        </tr>
                        <tr>
                            <td class="bapp-fr-text-lebel">Project's Address</td>
                            <td class="field-border"><?php echo e($investor->project_address); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td style="width:30%"></td>
                <td style="width:70%">
                    <table style="margin:6px 0px;">
                        <tr><td class="app-share-heading">Application Booking of Shares</td></tr>
                    </table>
                    <table style="width:100%" cellspacing="3px;">
                        <tr>
                            <td class="bapp-share-text-lebel" style="width:18%">Grand Total Price</td>
                            <td class="field-border"><?php echo e($investorsharedata['grand_total']); ?></td>
                        </tr>
                    </table>
                    <table style="width:100%" cellspacing="3px;">
                        <tr>
                            <td class="bapp-share-text-lebel" style="width:18%">In Word</td>
                            <td class="field-border">Two Core one Thousand</td>
                        </tr>
                    </table>
                    <table style="width:100%" cellspacing="3px;">
                        <tr>
                            <td class="bapp-share-text-lebel">Room Type</td>
                            <td class="field-border"><?php echo e($investorsharedata['room_type']); ?></td>
                            <td class="bapp-share-text-lebel">Membership Type</td>
                            <td class="field-border"><?php echo e($investorsharedata['membership_type']); ?></td>
                        </tr>
                    </table>
                    <table style="width:100%" cellspacing="3px;">
                        <tr>
                            <td class="bapp-share-text-lebel">Booking Payment(TK.)</td>
                            <td class="field-border"><?php echo e($investorsharedata['booking_amount']); ?></td>
                            <td class="bapp-share-text-lebel">Mode of Payment</td>
                            <td class="field-border"><?php echo e($investorsharepaymentdata['payment_method']); ?></td>
                        </tr>
                        <tr>
                            <?php
                                $share_create_date = date('d/m/Y',strtotime($investorsharedata['booking_amount']));
                            ?>
                            <td class="bapp-share-text-lebel">Transation No.</td>
                            <td class="field-border"><?php echo e($investorsharepaymentdata['bank_transation_id']); ?></td>
                            <td class="bapp-share-text-lebel">Dated</td>
                            <td class="field-border"><?php echo e($share_create_date); ?></td>
                        </tr>
                        <tr>
                            <td class="bapp-share-text-lebel">Bank Name</td>
                            <td class="field-border"><?php echo e($investorsharepaymentdata['bank_name']); ?></td>
                            <td class="bapp-share-text-lebel">Branch</td>
                            <td class="field-border"><?php echo e($investorsharepaymentdata['branch_name']); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div class="first-page-bottom" style="border:1px solid #000;">
            <table width="100%" style="margin:0px;padding:0px">
                <tr style="margin:0px;padding:0px">
                    <td style="margin:0px;padding:0px">
                        <table style="width:100%;">
                            <tr>
                                <td class="for-official-heading">For Official Use Only</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%">
                            <tr>
                                <td>
                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">Payment Shedule Mode</td>
                                            <td class="field-border"><?php echo e($investor->payment_shedule_mode); ?></td>
                                        </tr>
                                    </table>
                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">No. Of Slots/Shares</td>
                                            <td class="field-border"><?php echo e($investor->num_slot_share); ?></td>
                                        </tr>
                                    </table>

                                    <table width="100%">
                                        <tr style="vertical-align:top">
                                            <td style="width:16%;">Stay Facility</td>
                                            <td><span class="box-val"><?php echo e($investor->stay_day); ?></span><span class="box-label">Days</span><span class="box-val"><?php echo e($investor->stay_night); ?></span><span class="box-label">Night</span></td>
                                        </tr>
                                    </table>

                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">Down Payment</td>
                                            <td class="field-border"><?php echo e($investor->down_payment); ?></td>
                                        </tr>
                                    </table>

                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel" style="">No. Of EMI</td>
                                            <td class="field-border"><?php echo e($investor->emi_number); ?></td>
                                            <td class="official-lebel" style="text-align:right;">EMI Amount</td>
                                            <td class="field-border"><?php echo e($investor->emi_amount); ?></td>
                                        </tr>
                                    </table>

                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">Money Receipt No.</td>
                                            <td class="field-border"><?php echo e($investor->money_receipt_no); ?></td>
                                            <td class="official-lebel">Installment Date</td>
                                            <td class="field-border"><?php echo e($investor->installment_date); ?></td>
                                        </tr>
                                    </table>
                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">Dealing Person</td>
                                            <td class="field-border"><?php echo e($investor->dealing_person); ?></td>
                                        </tr>
                                    </table>
                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">Designation</td>
                                            <td class="field-border"><?php echo e($investor->dealing_person_designation); ?></td>
                                            <td class="official-lebel" style="text-align:right;">Office Id</td>
                                            <td class="field-border"><?php echo e($investor->dealing_person_office_id); ?></td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="vertical-align:top;">
                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">Owner's Id No.</td>
                                            <td class="field-border"><?php echo e($investor->investor_id); ?></td>
                                        </tr>
                                    </table>

                                    <table width="100%">
                                        <tr>
                                            <td class="official-lebel">Special Note</td>
                                        </tr>
                                        <tr>
                                            <td class="field-border" style="height:200px;vertical-align:top;">
                                            <?php echo e($investor->special_note); ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <div class="second-page-wrapper" style="width: 100%;border:1px solid #000;padding:0px;">
            <h2 class="second-page-header" style="background-color:gray;margin-top:130px;">Applicant's Personal Information</h2>
            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Country Phone</td>
                    <td class="field-border"><?php echo e($investor->phone); ?></td>
                </tr>
            </table>
            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Mobile</td>
                    <td class="field-border"><?php echo e($investor->mobile); ?></td>
                    <td class="personal-inform-lebel text-right">Emergency Contract</td>
                    <td class="field-border"><?php echo e($investor->emergency_contact); ?></td>
                </tr>
            </table>
            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Email</td>
                    <td class="field-border"><?php echo e($investor->email_primary); ?></td>
                    <td class="personal-inform-lebel text-right">Date of Birth</td>
                    <td class="field-border"><?php echo e($investor->date_of_birth); ?></td>
                </tr>
            </table>
            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">NID/Passport</td>
                    <td class="field-border"><?php echo e($investor->identification_number); ?></td>
                </tr>
            </table>

            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Religion</td>
                    <td class="field-border"><?php echo e($investor->religion); ?></td>
                    <td class="personal-inform-lebel text-right">Nationality</td>
                    <td class="field-border"><?php echo e($investor->nationality); ?></td>
                </tr>
            </table>

            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Father's Name</td>
                    <td class="field-border"><?php echo e($investor->father_name); ?></td>
                    <td class="personal-inform-lebel text-right">Mother's Name</td>
                    <td class="field-border"><?php echo e($investor->mother_name); ?></td>
                </tr>
            </table>

            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Spouse's Name</td>
                    <td class="field-border"><?php echo e($investor->spouse_name); ?></td>
                    <td class="personal-inform-lebel text-right">Date Of Birth</td>
                    <td class="field-border"><?php echo e($investor->spouse_date_of_birth); ?></td>
                </tr>
            </table>

            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Occupation</td>
                    <td class="field-border"><?php echo e($investor->occupation); ?></td>
                </tr>
            </table>

            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Degination</td>
                    <td class="field-border"><?php echo e($investor->designation); ?></td>
                    <td class="personal-inform-lebel text-right">Company Name</td>
                    <td class="field-border"><?php echo e($investor->company_name); ?></td>
                </tr>
            </table>

            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Office Address</td>
                    <td class="field-border"><?php echo e($investor->address); ?></td>
                </tr>
                <tr>
                    <td class="personal-inform-lebel">Mailing Address</td>
                    <td class="field-border"><?php echo e($investor->mailing_address); ?></td>
                </tr>
                <tr>
                    <td class="personal-inform-lebel">Permanent Address</td>
                    <td class="field-border"><?php echo e($investor->peraddress); ?></td>
                </tr>
            </table>

            <table style="width:100%" cellspacing="3px;">
                <tr>
                    <td class="personal-inform-lebel">Nominee's Name</td>
                    <td class="field-border"><?php echo e($investor->nominee_name); ?></td>
                    <td class="personal-inform-lebel text-right">Relation</td>
                    <td class="field-border"><?php echo e($investor->relation); ?></td>
                </tr>
                <tr>
                    <td class="personal-inform-lebel">Nominee's Id</td>
                    <td class="field-border"><?php echo e($investor->nominee_identity_number); ?></td>
                    <td class="personal-inform-lebel text-right">Mobile</td>
                    <td class="field-border"><?php echo e($investor->nominee_mobile); ?></td>
                </tr>
            </table>

        <table style="width:100%" cellspacing="3px;">
            <tr>
                <td class="personal-inform-lebel">Applicant's Name</td>
                <td class="field-border"><?php echo e($investor->name); ?></td>
            </tr>
        </table>
        <table style="width:100%" cellspacing="3px;">
            <tr>
                <td class="personal-inform-lebel">Applicant's Signature</td>
                <td class="field-border">Signature</td>
                <td class="personal-inform-lebel">Date</td>
                <td class="field-border">Signature Date</td>
            </tr>
        </table>

        <table style="width:100%;margin-top:40px;" cellspacing="10px;">
            <tr>
                <td style="width:200px;height:60px;vertical-align:bottom;border:1px solid #000;text-align:center">
                    <p style="padding:0;margin:0px"><?php echo e($investor->dealing_person); ?></p>
                    <p style="padding:0;margin:0px"><?php echo e($investor->dealing_person_designation); ?></p>
                    <p style="padding:0;margin:0px"><?php echo e($investor->dealing_person_office_id); ?></p>
                    <p style="border-top:1px solid;padding:0;margin:0px">Applicant's Signature</p>
                </td>
                <td style="width:200px;height:60px;vertical-align:bottom;text-align:center;border:1px solid #000">
                <p style="border-top:1px solid;padding:0;margin:0px">Checked By</p>
                </td>
                    <td style="width:200px;height:60px;vertical-align:bottom;border:1px solid;text-align:center;">
                    <p style="border-top:1px solid;padding:0;margin:0px">Chirman/CEO/MD/Director</p>
                </td>
            </tr>
        </table>
     </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layouts.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/investors/pdf.blade.php ENDPATH**/ ?>