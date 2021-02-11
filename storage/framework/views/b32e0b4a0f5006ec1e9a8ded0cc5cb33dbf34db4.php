    <!-- jQuery -->
    <script src="<?php echo e(asset( 'backend/lib/jquery/jquery.min.js')); ?>"></script>

    <!-- Toastr -->
    <script src="<?php echo e(asset( 'backend/js/toastr.min.js')); ?>"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset( 'backend/lib/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset( 'backend/lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- JQVMap -->
    <script src="<?php echo e(asset( 'backend/lib/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset( 'backend/lib/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo e(asset( 'backend/lib/jquery-knob/jquery.knob.min.js')); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo e(asset( 'backend/lib/moment/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset( 'backend/lib/daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo e(asset( 'backend/lib/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo e(asset( 'backend/lib/summernote/summernote-bs4.min.js')); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo e(asset( 'backend/lib/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset( 'backend/js/adminMangrove.js')); ?>"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset( 'backend/js/demo.js')); ?>"></script>
    <script src="<?php echo e(asset( 'backend/js/homeSection.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script type="text/javascript">

        $("#btnPrint").click(function () {
            var divContents = $(".content").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
        function generatePdf123(){
            var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function (element, renderer) {
                    return true;
                }
            };
            doc.fromHTML($('.content').html(), 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
            });
            doc.save('sample-file.pdf');
        };

        function generatePdf() {
            alert('clicked');
            var quotes = document.getElementById('pdfContent');
            console.log('quotes=>',quotes);
            html2canvas(quotes).then( function(canvas) {

                    alert('started rendreding');
                    //! MAKE YOUR PDF
                    var pdf = new jsPDF('p', 'pt', 'letter');

                    for (var i = 0; i <= quotes.clientHeight/980; i++) {
                        //! This is all just html2canvas stuff
                        var srcImg  = canvas;
                        var sX      = 0;
                        var sY      = 980*i; // start 980 pixels down for every new page
                        var sWidth  = 900;
                        var sHeight = 980;
                        var dX      = 0;
                        var dY      = 0;
                        var dWidth  = 900;
                        var dHeight = 980;

                        window.onePageCanvas = document.createElement("canvas");
                        onePageCanvas.setAttribute('width', 900);
                        onePageCanvas.setAttribute('height', 980);
                        var ctx = onePageCanvas.getContext('2d');
                        // details on this usage of this function:
                        // https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Using_images#Slicing
                        ctx.drawImage(srcImg,sX,sY,sWidth,sHeight,dX,dY,dWidth,dHeight);

                        // document.body.appendChild(canvas);
                        var canvasDataURL = onePageCanvas.toDataURL("image/png", 1.0);

                        var width         = onePageCanvas.width;
                        var height        = onePageCanvas.clientHeight;

                        //! If we're on anything other than the first page,
                        // add another page
                        if (i > 0) {
                            pdf.addPage(612, 791); //8.5" x 11" in pts (in*72)
                        }
                        //! now we declare that we're working on that page
                        pdf.setPage(i+1);
                        //! now we add content to that page!
                        pdf.addImage(canvasDataURL, 'PNG', 20, 40, (width*.62), (height*.62));

                    }
                    //! after the for loop is finished running, we save the pdf.
                    pdf.save('test.pdf');
                }
            );
        }
    </script>
<?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/layouts/foot.blade.php ENDPATH**/ ?>