<?php
    include ("header.inc.php");
?>

<section class="services">
    <!-- section title -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title mb25 text-center">
                   <h6 class="sub-title">
                        <span></span>
                        Services
                    </h6>
                    <h3 class="title">
                        All for You
                    </h3>
                </div>
            </div>
        </div>
    </div><hr>
    <div class="container">
        <div class="row">
<?php
    $whatWeDoQuery = $db->query("SELECT * FROM whatwedo ORDER BY `whatwedo_id`");
        while ($row = mysqli_fetch_array($whatWeDoQuery)){
            $whatWeDoId = $row['whatwedo_id'];
            $whatWeDoIcon = $row['whatwedo_icon'];
            $whatWeDoTitle = $row['whatwedo_title'];
            $whatWeDoDiscription = $row['whatwedo_discription'];
?>          
            <div class="col-lg-4 col-md-4 col-xs-6">
                <div class="card text-center service-card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $whatWeDoTitle; ?></h5>
                            <div class="service-icon">
                                <i class="<?php echo $whatWeDoIcon; ?>"></i>
                            </div>
                            <p class="card-text"><?php echo $whatWeDoDiscription; ?></p>
                            <a href="serviceDetails.php?pageId=<?php echo $whatWeDoId; ?>" class="btn btn-primary" style="margin-top:20px">Order Now</a>
                        </div>
                </div>
            </div>
<?php
    }
?>
    </div>
</section>

<?php
    include ("footer.inc.php");
?>