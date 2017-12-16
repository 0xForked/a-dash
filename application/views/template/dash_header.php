<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Dashboard | <?php echo $sett[0]["value"] ?></title>

        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/items/favicon.png">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- Animation Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Light Gallery Plugin Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
        <!-- Bootstrap Select Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/css/style.css" rel="stylesheet">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/css/themes/all-themes.css" rel="stylesheet" />
        <!-- Bootstrap Tagsinput Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body class="theme-blue-grey">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-blue-grey">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>

                    <a class="navbar-brand" href="<?php echo base_url();?>dashboard">[ a-DASH ] - <?php echo $sett[0]["value"] ?></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="<?php echo base_url();?>" target="_blank"><i class="material-icons">desktop_windows</i></a></li>
                        <li><a data-toggle="modal" data-target="#smallModal"><i class="material-icons waves-effect">input</i></a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
