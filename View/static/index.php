<!DOCTYPE html>
<?php
function __autoload($class_nome) {
    require_once '../../Model/' . $class_nome . '.php';
}
?>
<html>
<!-- ========== Inclusão do head do HTML ====== -->
<?php require_once '../includes/head.php'; ?>
    <body class="fixed-left">
        <?php
            require_once '../../Controller/BookController.php';
            //require_once '../includes/modalprojecto.php';
            require_once '../includes/menubar.php';
            require_once '../includes/menulateral.php';
        ?>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                
                <div class="content">
                    <div class="container-fluid">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">BookStore</a></li>
                                        <li class="breadcrumb-item active">Static</li>
                                        <li class="breadcrumb-item active">General</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">General Static:  <?php ?> </h4><hr><br>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Number of books</label>
                                                <input style="font-weight:bold" required="" value="<?php echo $getStatic->qtty ?>" type="text" class="form-control" name="title" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Total payable</label>
                                                <input style="font-weight:bold" required="" value="<?php echo '£ '.$getStatic->total ?>" type="text" class="form-control" name="type" readonly="">
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>

                        
                        <!-- end row -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end content -->
            <?php require_once '../includes/footer.php' ?>

        </div>
    </div>
    <!-- END wrapper -->
    <script>
        var resizefunc = [];
    </script>
    <!-- Plugins  -->
    <script src="../Assets/js/jquery.min.js"></script>
    <script src="../Assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
    <script src="../Assets/js/bootstrap.min.js"></script>
    <script src="../Assets/js/detect.js"></script>
    <script src="../Assets/js/fastclick.js"></script>
    <script src="../Assets/js/jquery.slimscroll.js"></script>
    <script src="../Assets/js/jquery.blockUI.js"></script>
    <script src="../Assets/js/waves.js"></script>
    <script src="../Assets/js/wow.min.js"></script>
    <script src="../Assets/js/jquery.nicescroll.js"></script>
    <script src="../Assets/js/jquery.scrollTo.min.js"></script>

    <!-- Required datatable js -->
        <script src="../Assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="../Assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
        <script src="../Assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../Assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../Assets/plugins/datatables/jszip.min.js"></script>
        <script src="../Assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../Assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../Assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../Assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="../Assets/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="../Assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../Assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="../Assets/plugins/datatables/dataTables.select.min.js"></script>

        <!-- App js -->
        <script src="../Assets/js/jquery.core.js" type="text/javascript"></script>
        <script src="../Assets/js/jquery.app.js" type="text/javascript"></script>

    <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
</body>
</html>
