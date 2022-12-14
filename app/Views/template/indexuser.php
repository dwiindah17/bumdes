<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COBA</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="<?= base_url(); ?>/images/favicon.png" /> -->
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?= $this->include('template/nav'); ?>
            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">

                    <?= $this->renderSection('page-content'); ?>


                </div> <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                    </div>
                </footer> -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- hamburger -->
    <script src="<?= base_url(); ?>/js/script.js"></script>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url(); ?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url(); ?>/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url(); ?>/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>/js/misc.js"></script>
    <script src="<?= base_url(); ?>/js/settings.js"></script>
    <script src="<?= base_url(); ?>/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url(); ?>/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>