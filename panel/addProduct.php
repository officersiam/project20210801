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
                    <h1 class="h3 mb-4 text-gray-800">Add Product</h1>
                    <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="listProduct.php">
                        <div class="form-group">
                            <label>Product Image Upload</label>
                            
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file" name="product_img">
                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" name="product_category" id="exampleFormControlSelect1">

                            <?php
    $site_setting_query = $db->query("SELECT * FROM category") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $category_id = $row['category_id'];
            $category_title = $row['category_title'];
?>
                                <option value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
<?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Title</label>
                            <input type="text" class="form-control" name="product_title" aria-describedby="productTitleHelp" placeholder="Type Title Here">
                            <small id="productTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" class="form-control" name="product_price" aria-describedby="productPriceHelp" placeholder="Type Price Here">
                            <small id="productPriceHelp" class="form-text text-muted">We'll Type Your Price Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Product Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="product_discription" aria-describedby="productDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="productDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="product">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include("footer.inc.php"); ?>