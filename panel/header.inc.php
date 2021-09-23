<?php
  include("../core.php");

  if (!isAdmin()) {
    header('location: ../index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
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