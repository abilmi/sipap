<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="asset/login/img/jatim.png">
        <title>SIPAP JATIM</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <base href="<?php echo base_url()?>"/>
        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap-theme.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap-admin-theme-change-size.css">

        <!-- AJAX -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url('asset/my_ajax.js'); ?>" type="text/javascript"></script>
        <!-- Datatables -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/DT_bootstrap.css">

        <!-- Vendors -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/bootstrap-datepicker/css/datepicker.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/datepicker.fixes.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/uniform/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/uniform.default.fixes.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/chosen.min.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/selectize/dist/css/selectize.bootstrap3.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css">
    </head>
    <body class="bootstrap-admin-with-small-navbar">
       

        <!-- main / large navbar -->
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img src="asset/login/img/logonew4.png"  />
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <div class="col-md-2 bootstrap-admin-col-left">
                    <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                        <li >

                            <a href="index.php/welcome/main_dashboard"><i class="glyphicon glyphicon-chevron-right"></i> Halaman Utama</a>
                        </li>
                        <li >
                            <a href="index.php/komoditi/master_data_komoditi"><i class="glyphicon glyphicon-chevron-right"></i> Komoditi</a>
                        </li>
                        <li >
                            <a href="index.php/komoditi/analisa"><i class="glyphicon glyphicon-chevron-right"></i> Analisa Komoditi</a>
                        </li>
                        <li >
                            <a href="index.php/penerima/master_data_penerima"><i class="glyphicon glyphicon-chevron-right"></i> Mitra Bisnis</a>
                        </li>
                        <li >
                            <a href="index.php/pelabuhan/master_data_pelabuhan"><i class="glyphicon glyphicon-chevron-right"></i> Mitra Pelayaran</a>
                        </li>
                        <li class="active" >
                            <a href="index.php/wilayah_pantau/master_data_provinsi"><i class="glyphicon glyphicon-chevron-right"></i> Wilayah Pantau KPD</a>
                        </li>
                        <li>
                            <a href="index.php/transaksi/formulir_transaksi"><i class="glyphicon glyphicon-chevron-right"></i> Kelola Data Transaksi Bongkar Muat</a>
                        </li>
                        <li>
                            <a href="index.php/transaksi/laporan_menu"><i class="glyphicon glyphicon-chevron-right"></i> Laporan</a>
                        </li>
                       <li>
                            <a href="index.php/welcome/logout"><i class="glyphicon glyphicon-chevron-right"></i> Logout</a>
                        </li>
                    </ul>
                </div>