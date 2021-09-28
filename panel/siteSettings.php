<?php include("header.inc.php"); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include("sideBar.inc.php"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("topBar.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Site Settings</h1>
                    <form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
    $site_setting_query = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $site_setting_name = $row['site_setting_name'];
            $site_setting_title = $row['site_setting_title'];
            $site_setting_slogan = $row['site_setting_slogan'];
            $site_setting_adress = $row['site_setting_adress'];
            $site_setting_phone = $row['site_setting_phone'];
            $site_setting_email = $row['site_setting_email'];
            $site_setting_description = $row['site_setting_description'];
?>
                        <div class="form-group">
                            <label>Site Name</label>
                            <input type="text" class="form-control" name="site_setting_name" aria-describedby="siteNameHelp" value="<?php echo $site_setting_name;?>">
                            <small id="siteNameHelp" class="form-text text-muted">We'll Type Your Site Name Here.</small>
                        </div>
                        <div class="form-group">
                            <label>Site Title</label>
                            <input type="text" class="form-control" name="site_setting_title" aria-describedby="siteTitleHelp" value="<?php echo $site_setting_title;?>">
                            <small id="siteTitleHelp" class="form-text text-muted">We'll Type Your Site Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Site Slogan</label>
                            <input type="text" class="form-control" name="site_setting_slogan" aria-describedby="siteSloganHelp" value="<?php echo $site_setting_slogan;?>">
                            <small id="siteSloganHelp" class="form-text text-muted">We'll Type Your Site Slogan Here If Any.</small>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea type="text" class="form-control" name="site_setting_adress" aria-describedby="siteAddressHelp"><?php echo $site_setting_adress;?></textarea>
                            <small id="siteAddressHelp" class="form-text text-muted">We'll Type Your Address Here.</small>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" name="site_setting_phone" aria-describedby="sitePhoneHelp" value="<?php echo $site_setting_phone;?>">
                            <small id="sitePhoneHelp" class="form-text text-muted">We'll Type Your Phone Number Here.</small>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="site_setting_email" aria-describedby="siteEmailHelp" value="<?php echo $site_setting_email;?>">
                            <small id="siteEmailHelp" class="form-text text-muted">We'll Type Your Email Address Here.</small>
                        </div>
                        <div class="form-group">
                            <label>Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="site_setting_description" aria-describedby="siteBusinessHourHelp"><?php echo $site_setting_description;?></textarea>
                            <small id="siteBusinessHourHelp" class="form-text text-muted">Type Your Discription Here.</small>
                        </div>
<?php } ?>
                        <button type="submit" class="btn btn-primary" name="sitesetting">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>