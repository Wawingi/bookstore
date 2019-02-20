<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>DAMAXAWA</title>

        <link href="../Assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css"/>

        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
		<link href="../Assets/css/icons.css" rel="stylesheet" type="text/css"/>
        
		<link href="../Assets/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../Assets/js/modernizr.min.js" type="text/javascript"></script>
        
    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Inclusão do menu Bar ========== -->
            <?php require_once '../includes/menubar.php'; ?>
            <!-- ========== Inclusão do menu lateral ====== -->
            <?php require_once '../includes/menulateral.php'; ?>

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
                                    <h4 class="page-title">Welcome !!!</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">BookStore</a></li>
                                        <li class="breadcrumb-item active">Home Page</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">

                                    <img src="../Assets/images/bookstore.jpg" style="width: 40%;margin-left:  250px">

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end content -->

            <?php require_once '../includes/footer.php' ?>


        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
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

    <link href="../Assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>

    <!-- Counter Up  -->
    <script src="../Assets/plugins/waypoints/lib/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../Assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

    <!-- circliful Chart -->
    <script src="../Assets/plugins/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="../Assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>

    <!-- skycons -->
    <script src="../Assets/plugins/skyicons/skycons.min.js" type="text/javascript"></script>

    <!-- Page js  -->
    <script src="../Assets/pages/jquery.dashboard.js" type="text/javascript"></script>        

    <!-- Custom main Js -->
    <script src="../Assets/js/jquery.core.js" type="text/javascript"></script>
    <script src="../Assets/js/jquery.app.js" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
            $('.circliful-chart').circliful();
        });

        // BEGIN SVG WEATHER ICON
        if (typeof Skycons !== 'undefined') {
            var icons = new Skycons(
                    {"color": "#3bafda"},
                    {"resizeClear": true}
            ),
                    list = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

            for (i = list.length; i--; )
                icons.set(list[i], list[i]);
            icons.play();
        }
        ;

    </script>
</body>
</html>