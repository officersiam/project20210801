<?php
    include ("core.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Siam Al Mahmud">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Title Diboni</title>
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- UI KIT CSS -->
    <link href="css/uikit.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .uk-form-width-large {
            width: 1200px !important;
        }
        .uk-input, .uk-select:not([multiple]):not([size]) {
            height: 200px !important;
            vertical-align: middle !important;
            display: inline-block !important;
        }
        .uk-input, .uk-select::placeholder {
            text-align: center !important;
            font-size: 20px !important;
            color: #222;
            font-weight: bold;
        }
        @media only screen and (max-device-witdh: 768px){
            .dashLogoMob{
                display: none;
            }
        }
    </style>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- ========== Header ========== -->
    <div class="navbar header navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Navbar-header -->
            <div class=" navbar-header">
                <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="logo" href="index.html">
                    Kicu Ekta Diboni
                </a>
                <a class="sticky-logo" href="index.html">
                    Kicu Ekta Diboni
                </a>
            </div>
            <!-- end navbar-header -->

            <!-- menu -->
            <div class="navbar-collapse collapse" id="data-scroll">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
<?php if (isLoggedIn()) { ?>
                        <li class='nav-item'>
                            <a class='nav-link' href='panel/'>Dashboard</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Logout</a>
                        </li>
<?php } ?>
                </ul>
            </div>
            <!--/Menu -->
        </div>
        <!-- end container -->
    </div>
    <!-- ========== Header End ========== -->