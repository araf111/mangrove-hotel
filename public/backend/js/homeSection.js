$('#custom-tabs-one-home-tab').on('click',function () {
        $('#homesection_upload').css("display","block");
        $('#homesection_select').css("display","none");
});
$('#custom-tabs-one-profile-tab').on('click',function () {
    $('#homesection_upload').css("display","none");
    $('#homesection_select').css("display","block");
});

function ShowLoadingScreen(){
    console.log('display overlay');
    $('.overlay').css('display','block');
}
function HideLoadingScreen(){
    console.log('display none overlay');
    $('.overlay').css('display','none');
    $('.progress-bar').css('display', 'block');
    $('.progress-bar').text('0%');
    $('.progress-bar').css('width', '0%');
    $('input[type=file]').val('');
}
$(document).ready(function(){

    $('form#uploadLogo').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            $('.progress-bar').css('display', 'none');

            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');

                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');

                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');
                HideLoadingScreen();
                $('#logo').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();

        }
    });
    $('form#uploadfavicon').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','inline-block');
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#favicon').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form#uploadBanner').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','inline-block');
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#banner').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form#uploadGreetings').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','inline-block');
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#greetings').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form#uploadBrochure').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','inline-block');
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#brochure').attr('href',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form#uploadVideo1').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            $('.progress-bar').css('display', 'none');
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');

                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#video1').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }

    });

    $('form#uploadVideo2').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            $('.progress-bar').css('display', 'none');
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');

                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#video2').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form#uploadVideo3').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            $('.progress-bar').css('display', 'none');
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');

                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#video3').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form#socialLink').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            $('.progress').css('display','block');
            console.log('social link');
            $('.progress-bar').css('display', 'none');
            if(data.errors)
            {console.log(data.errors);
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('content saved successfully');
                $('.progress-bar').css('width', '100%');

                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');


                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form#tomorrowsContnet').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','inline-block');
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            $('.progress').css('display','block');
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('content saved successfully');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');


                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });


    $('form#details').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            $('.progress-bar').css('display', 'none');
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');

                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#video3').attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form.overview').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');
                if(data.success=='Application Sent Successfully'){
                        $('#title').val('');
                        $('#email').val('');
                        $('#description').val('');
                        $('#file').val('');

                }
                $('#'+data.outputId).attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form.modernLiving').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#'+data.outputId).attr('src',data.imagesrc);
                //$('#success').append(data.image);
            }
            HideLoadingScreen();
        }
    });

    $('form.homeSection').ajaxForm({

        beforeSend:function(){
            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#'+data.outputId).attr('src',data.imagesrc);
                //$('#success').append(data.image);uploadBrochure
            }
            HideLoadingScreen();
        }
    });

    $('form.gallery').ajaxForm({

        beforeSend:function(){

            $('#success').empty();
            ShowLoadingScreen();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#'+data.outputId).attr('src',data.imagesrc);
                    if(data.outputId!==''){
                        //window.location.href='http://bazarlagbe.xyz/admin/cms/gallery/list';
                    }

                //$('#success').append(data.image);uploadBrochure
            }
            HideLoadingScreen();
        }
    });


    $('form.notGallery').ajaxForm({

        beforeSend:function(){
            ShowLoadingScreen();
            $('#success').empty();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#'+data.outputId).attr('src',data.imagesrc);

                //$('#success').append(data.image);uploadBrochure
            }
            HideLoadingScreen();
        }
    });


    $('form.loginImage').ajaxForm({

        beforeSend:function(){
            ShowLoadingScreen();
            $('#success').empty();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#'+data.outputId).attr('src',data.imagesrc);
                //$('#success').append(data.image);uploadBrochure
            }
            HideLoadingScreen();
        }
    });

    $('form.footer').ajaxForm({

        beforeSend:function(){
            ShowLoadingScreen();
            $('#success').empty();
        },
        uploadProgress:function(event, position, total, percentComplete)
        {
            $('.progress').css('display','block');
            $('.progress-bar').text(percentComplete + '%');
            $('.progress-bar').css('width', percentComplete + '%');
        },
        success:function(data)
        {
            if(data.errors)
            {
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
                $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
            }
            if(data.success)
            {
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').css('display', 'none');
                $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');

                $('#'+data.outputId).attr('src',data.imagesrc);
                //$('#success').append(data.image);uploadBrochure
            }
            HideLoadingScreen();
        }
    });
});

function editCall(callID){
    let ttext=$('#tomorrowCallText_'+callID).text();
    console.log('ttext=>'+jQuery.trim(ttext));
    $('#tomorrowText').val(jQuery.trim(ttext));
    $('#btnTomorrowText').text('Update');
    $('#tomorrowText_id').val(callID);
    $('#tomorrowText_id').append('<input type="hidden" id="formMethod" name="_method" value="PUT">');
}

$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
