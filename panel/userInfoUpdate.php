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
    $site_setting_query = $db->query("SELECT * FROM picci") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $picci_id = $row['picci_id'];
            $picci_full_name = $row['picci_full_name'];
            $picci_username = $row['picci_username'];
            $picci_email = $row['picci_email'];
            $picci_phone = $row['picci_phone'];
            $picci_address = $row['picci_address'];
?>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="picci_full_name" value="<?php echo $picci_full_name;?>">
                            <input type="text" class="form-control" name="picci_id" value="<?php echo $picci_id;?>" hidden>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="picci_username" value="<?php echo $picci_username;?>">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="picci_email"  value="<?php echo $picci_email;?>">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" name="picci_phone" value="<?php echo $picci_phone;?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea type="text" id="editor" class="form-control" name="picci_address"><?php echo $picci_address;?></textarea>
                        </div>
<?php } ?>
                        <button type="submit" class="btn btn-primary" name="users_update_user">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>