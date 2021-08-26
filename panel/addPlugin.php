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
                    <h1 class="h3 mb-4 text-gray-800">Add Plugin</h1>
                    <form accept-charset="utf-8" method="post" action="listPlugin.php">
                        <div class="form-group">
                            <label>Plugin Name</label>
                            <input type="text" class="form-control" name="plugin_name" aria-describedby="pluginHelp" placeholder="Type Plugin Name Here">
                            <small id="pluginHelp" class="form-text text-muted">Search Icon Name From FontAwesome.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Action</label>
                            <select class="form-control" name="plugin_action" id="exampleFormControlSelect1">
                                <option value="show">Show</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="plugin">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>