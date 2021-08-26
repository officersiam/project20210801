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
                    <h1 class="h3 mb-4 text-gray-800">Add Site Logo</h1>
                    <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="addSiteLogoIcon.php">
                        <div class="form-group">
                            <label>Site Logo Upload</label>
                            
<?php
    $siteSettingLogoQuery = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($siteSettingLogoQuery)) {
            $site_setting_logo = $row['site_setting_logo'];
            $site_setting_name = $row['site_setting_name'];
?>
                            <img src="../images/<?php echo $site_setting_logo; ?>" alt="<?php echo $site_setting_name; ?>">
<?php } ?>
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file" name="site_setting_logo">
                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="site_setting_logo_update">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
                <hr>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Add Site Icon</h1>
                <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="addSiteLogoIcon.php">
                    <div class="form-group">
                        <label>Site Icon Upload</label>
                        
                <?php
                $siteSettingIconQuery = $db->query("SELECT * FROM site_setting") or die('could not search!');
                while ($row = mysqli_fetch_array($siteSettingIconQuery)) {
                $site_setting_icon = $row['site_setting_icon'];
                $site_setting_name = $row['site_setting_name'];
                ?>
                        <img src="../images/<?php echo $site_setting_icon; ?>" alt="<?php echo $site_setting_name; ?>">
                <?php } ?>
                        <div class="uk-margin" uk-margin>
                            <div uk-form-custom="target: true">
                                <input type="file" name="site_setting_icon">
                                <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="site_setting_icon_update">Submit</button>
                </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>