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
                    <h1 class="h3 mb-4 text-gray-800">Profile Picture</h1>
                    <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#profilePicUpdate">Add</a>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="profilePicUpdate" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            
                                        <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            <div class="form-group">
                                                <label>Profile Picture Update</label>
                                                
<?php
    $site_setting_query = $db->query("SELECT * FROM picci") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $picci_id = $row['picci_id'];
?>
                                                <div class="uk-margin" uk-margin>
                                                    <div uk-form-custom="target: true">
                                                        <input type="file" name="picci_profile_pic">
                                                        <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                                    </div>
                                                </div>
                            <input type="text" class="form-control" name="picci_id" value="<?php echo $picci_id;?>" hidden>
<?php } ?>
                                            </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="users_image_update">Add</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-table-responsive table table-bordered table-striped mb-0" id="datatable-tabletools">
        <thead>
            <tr>
                <th class="uk-width-expand">Profile Pic</th>
            </tr>
        </thead>
            <tbody>
<?php
    $picciQuery = $db->query("SELECT * FROM picci ORDER BY picci_id DESC") or die('could not search!');
        while ($row = mysqli_fetch_array($picciQuery)) {
            $picci_profile_pic = $row['picci_profile_pic'];
?>
                <tr class="text-center">
                    <td><img src="../images/users/<?php echo $picci_profile_pic; ?>" alt="profile picture" width="500px"></td>
                </tr>
<?php } ?>
                
            </tbody>
        </table>
</div>
                </div>
                <!-- /.container-fluid -->
  
<?php include("footer.inc.php"); ?>