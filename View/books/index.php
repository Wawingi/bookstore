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
            require_once './modalbook.php';
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
                                        <li class="breadcrumb-item active">Administration</li>
                                        <li class="breadcrumb-item active">Books</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                       
                        <!-- Inclusão da Modal -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <!-- Botão chamar Modal -->
                                    <button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" data-toggle="modal" data-target="#modalbook">New Book</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">My Books</h4><hr><br>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center">#</th>
                                            <th style="text-align: center">Price</th>
                                            <th style="text-align: center">Type</th>
                                            <th style="text-align: center">Isbn</th>
                                            <th style="text-align: center">Title</th>
                                            <th style="text-align: center">Options</th>
                                        </tr>
                                        </thead>
                                        <?php
                                            $cont=0;$total=0;
                                            $book = new BookModel();
                                            foreach ($book->All() as $chave=>$valor):
                                                $total+=$valor->price;
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center"><?php echo ++$cont; ?></td>
                                                <td style="text-align: center"><?php echo '£ '. $valor->price; ?></td>
                                                <td style="text-align: center"><?php echo '['.$valor->type.']'; ?></td>
                                                <td style="text-align: center"><?php echo $valor->isbn; ?></td>
                                                <td style="text-align: center"><?php echo $valor->title; ?></td>
                                                
                                                <td style="text-align: center;word-spacing: 10px">        
                                                    <?php echo "<a href='verlivro.php?operation=".base64_encode('verlivro')."&id=". base64_encode($valor->id) ."' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Ver'><i class='fa fa-eye'></i></a>" ?>
                                                    <?php echo "<a href='#?acao=".base64_encode('editar')."&id=". base64_encode($valor->id) ."' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Editar'><i class='fa fa-pencil'></i></a>" ?>
                                                    <?php echo "<a href='index?operation=".base64_encode('eliminar')."&id=". base64_encode($valor->id) ."' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Eliminar'><i class='fa fa-trash-o'></i></a>" ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td style="text-align: center"><?php echo ++$cont; ?></td>
                                                <td style="text-align: center;font-weight:bold"><?php echo '£ '. $total; ?></td>
                                                <td style="text-align: center;font-weight:bold"><?php echo 'TOTAL'; ?></td>                                          
                                            </tr>
                                        </tbody>
                                    </table>
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
