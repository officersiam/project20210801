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
                    <h1 class="h3 mb-4 text-gray-800">Add Slider</h1>
                    <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="listSlider.php">
                        <div class="form-group">
                            <label>Slider Image Upload</label>
                            
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file" name="slider_img">
                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Slider Title</label>
                            <input type="text" class="form-control" name="slider_title" aria-describedby="sliderTitleHelp" placeholder="Type Title Here">
                            <small id="sliderTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Slider Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="slider_discription" aria-describedby="sliderDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="sliderDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <div class="form-group">
                            <label>Slider Link</label>
                            <input type="text" class="form-control" name="slider_link" aria-describedby="sliderLinkHelp" value="javascript:void(0);">
                            <small id="sliderLinkHelp" class="form-text text-muted">We'll Type Your Link Here If Any.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="slider">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>