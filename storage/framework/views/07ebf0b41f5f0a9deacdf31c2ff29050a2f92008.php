<?php $__env->startSection('content'); ?>


    <section class="content">
        <div class="container-fluid">

                <div class="row" style="margin-top: 200px; padding-top: 20px; text-align: center"; >

                    <div class="col-6" style="margin: 0 auto;">
                        <form method="post" class="overview" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="login_shareHolderLogo">
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" id="title" rows="3" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" rows="3" placeholder="Your email" />
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="description" id="description" rows="3" placeholder="Description" ></textarea>
                            </div>
                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                <input type="file" name="file" id="file" class="custom-file-input" >
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <input type="hidden" name="parent_section_name" value="findajob">
                                <input type="hidden" name="sectionName" value="findajob">
                                <input type="hidden" name="section_type" value="file">
                                <input type="hidden" name="content_type" value="file1">
                            </div>
                            <div style="position: relative">
                                <div class="progress" style="display: none;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow=""
                                         aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                       Processing, Please wait..
                                    </div>
                                    <div id="success">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-150"> Apply for Job
                            </button>

                        </form>

                    </div>
                </div>

        </div>
    </section>
    <style type="text/css">
        .overlay{
            position: fixed;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background: #c2c2c2;
            z-index: 9999;
            overflow: hidden;
            text-align: center;
            opacity: 0.7;
        }


        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }
            to {
                background-position: 0 0;
            }
        }

        @keyframes  progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }
            to {
                background-position: 0 0;
            }
        }
        #success {
            width: 100%;
            margin: 0 auto;
            text-align:center;
            padding-top: 9px;
        }

        .progress {
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            overflow: hidden;
            font-size: 0.75rem;
            background-color: #e9ecef;
            border-radius: 0.25rem;
            box-shadow: inset 0 0.1rem 0.1rem rgba(0, 0, 0, 0.1);
            width: 34%;
            margin: 0 auto;
        }

        .progress-bar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center;
            color: #ffffff;
            text-align: center;
            white-space: nowrap;
            background-color: #028E46;
            transition: width 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem;
        }

        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }
        }

    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/front/findajob.blade.php ENDPATH**/ ?>