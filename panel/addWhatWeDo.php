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
                    <h1 class="h3 mb-4 text-gray-800">Add What We Do</h1>
                    <form accept-charset="utf-8" method="post" action="listWhatWeDo.php">
                        <div class="form-group">
                            <label>Icon Name</label>
                            <input type="text" class="form-control" name="whatwedo_icon" aria-describedby="whatwedoIconHelp" placeholder="Type Icon Code Here">
                            <small id="whatwedoIconHelp" class="form-text text-muted">Search Icon Name From FontAwesome.</small>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="whatwedo_title" aria-describedby="whatwedoTitleHelp" placeholder="Type Title Here">
                            <small id="whatwedoTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="whatwedo_discription" aria-describedby="whatwedoDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="whatwedoDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="whatwedo">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>