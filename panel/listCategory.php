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
                    <h1 class="h3 mb-4 text-gray-800">List Category</h1>
                    <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#categoryAdd">Add</a>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="categoryAdd" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            
                                        <form accept-charset="utf-8" method="post" action="listCategory.php">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Category Title</label>
                                                <input type="text" class="form-control" name="category_title" aria-describedby="categoryTitleHelp" placeholder="Title Here">
                                                <small id="categoryTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Category Short</label>
                                                <input type="text" class="form-control" name="category_short" aria-describedby="categoryShortHelp" placeholder="Lebel Here">
                                                <small id="categoryShortHelp" class="form-text text-muted">We'll Type Your Short Here If Any.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Category Lebel</label>
                                                <input type="text" class="form-control" name="category_lebel" aria-describedby="categoryLebelHelp" placeholder="Lebel Here">
                                                <small id="categoryLebelHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                                            </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="category">Add</button>
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
                <th class="uk-table-shrink">#</th>
                <th class="uk-width-expand">Title</th>
                <th class="uk-table-shrink uk-text-nowrap">Short</th>
                <th class="uk-table-shrink uk-text-nowrap">Lebel</th>
                <th class="uk-width-small">Action</th>
            </tr>
        </thead>
            <tbody>
            
            <?php

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
$page_no = $_GET['page_no'];
} else {
  $page_no = 1;
  }

$total_records_per_page = 24;
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM `category` ");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total page minus 1
?>
<?php
    $categoryQuery = $db->query("SELECT * FROM category ORDER BY category_id DESC LIMIT $offset, $total_records_per_page") or die('could not search!');
        while ($row = mysqli_fetch_array($categoryQuery)) {
            $category_id = $row['category_id'];
            $category_title = $row['category_title'];
            $category_short = $row['category_short'];
            $category_lebel = $row['category_lebel'];
?>
                <tr class="text-center">
                    <td style="background: #FFCD43;color: #222;font-weight:bold;"><?php echo $category_id; ?></td>
                    <td class="uk-text-truncate"><?php echo $category_title; ?></td>
                    <td class="uk-text-nowrap"><?php echo $category_short; ?></td>
                    <td class="uk-text-nowrap"><?php echo $category_lebel; ?></td>
                    <td class="uk-table-link">
                        <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#category<?php echo $category_id; ?>">Edit</a>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="category<?php echo $category_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            
                                        <form accept-charset="utf-8" method="post" action="listCategory.php">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Category Title</label>
                                                <input type="text" class="form-control" name="category_title" aria-describedby="categoryTitleHelp" value="<?php echo $category_title; ?>">
                                                <input type="text" class="form-control" name="category_id" aria-describedby="categoryTitleHelp" value="<?php echo $category_id; ?>" hidden>
                                                <small id="categoryTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Category Short</label>
                                                <input type="text" class="form-control" name="category_short" aria-describedby="categoryShortHelp" value="<?php echo $category_short; ?>">
                                                <small id="categoryShortHelp" class="form-text text-muted">We'll Type Your Short Here If Any.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Category Lebel</label>
                                                <input type="text" class="form-control" name="category_lebel" aria-describedby="categoryLebelHelp" value="<?php echo $category_lebel; ?>">
                                                <small id="categoryLebelHelp" class="form-text text-muted">We'll Type Your Lebel Here If Any.</small>
                                            </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="category_update">Update</button>
                                        </div>
                                        </form>
                                        
                                        <form accept-charset="utf-8" method="post" action="listCategory.php">
                                            <input type="text" name="category_id" value="<?php echo $category_id; ?>" hidden>
                                            <button type="submit" class="btn btn-primary" name="category_delete">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
<?php } ?>
                
            </tbody>
        </table>
</div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <nav aria-label="Page navigation example" style="margin: 0 auto">
        <ul class="pagination justify-content-center">
        <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
          <a class="page-link" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?> aria-label="Previous">
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
          </a>
        </li>
  <?php
  if ($total_no_of_pages <= 10){
  for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
  if ($counter == $page_no) {
  echo "<li class=\"page-item active\"><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  }
  elseif($total_no_of_pages > 10){

  if($page_no <= 4) {
  for ($counter = 1; $counter < 8; $counter++){
  if ($counter == $page_no) {

  echo "<li class='page-item active'><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$second_last'>$second_last</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
  }

  elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=1'>1</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=2'>2</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";
  for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
  if ($counter == $page_no) {
  echo "<li class='page-item active'><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$second_last'>$second_last</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
  }

  else {
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=1'>1</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=2'>2</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";

  for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
  if ($counter == $page_no) {
  echo "<li class=\"page-item active\"><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  }
  }
  ?>
        <li class="page-item" <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
          <a class="page-link" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?> aria-label="Next">
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
          </a>
        </li>
  <?php if($page_no < $total_no_of_pages){
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$total_no_of_pages'>
  <span aria-hidden=\"true\">&rsaquo;&rsaquo;</span>
  </a></li>";
  } ?>
        </ul>
      </nav>

  
<?php include("footer.inc.php"); ?>