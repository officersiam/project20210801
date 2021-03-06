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
                <a class="logo" href="index.php">
                    Kicu Ekta Diboni
                </a>
                <a class="sticky-logo" href="index.php">
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
<?php
    $pluginQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'services' ");
        while ($row = mysqli_fetch_array($pluginQuery)){
            $plugin_action = $row['plugin_action'];
            if($plugin_action == 'show'){
?>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
<?php
        }
    } 
?>
<?php
    $pluginQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'contact' ");
        while ($row = mysqli_fetch_array($pluginQuery)){
            $plugin_action = $row['plugin_action'];
            if($plugin_action == 'show'){
?>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
<?php
        }
    } 
?>
<?php if (isAdmin()) { ?>
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