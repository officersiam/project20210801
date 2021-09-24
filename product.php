<?php
    include("header.inc.php");
?>


<!-- ==========  projects Section========== -->
<section class="project-product projects bg-gray pt80 pb80" id="projects">
    <!-- section title -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title mb25 text-center">
                   <h6 class="sub-title">
                        <span></span>
                        Products
                    </h6>
                    <h3 class="title">
                        Products for You
                    </h3>
                </div>
            </div>
        </div>
    </div>

    
    
    <ul class="uk-subnav uk-subnav-pill text-center" style="width: max-content;margin: 0 auto;margin-bottom: 2rem;">
                <li class="uk-active"><a href="product.php">all</a></li>
<?php
    $categoryQuery = $db->query("SELECT * FROM category WHERE `category_lebel` = 'product' ");
        while ($row = mysqli_fetch_array($categoryQuery)){
            $categoryTitle = $row['category_title'];
            $categoryShort = $row['category_short'];
?>
                <li class="uk-active"><a href="product.php?page=<?php echo $categoryShort; ?>"><?php echo $categoryTitle; ?></a></li>
<?php
    }
?>
            </ul>
    <!-- section title -->
    <div class="container-fluid">
        <div class="row">
<?php
if(isset($_GET['page'])){
    $pageId = $_GET["page"];
    $productQuery = $db->query("SELECT * FROM product WHERE `product_category` = '$pageId' ");
}else{
    $productQuery = $db->query("SELECT * FROM product");
}
        while ($row = mysqli_fetch_array($productQuery)){
            $productId = $row['product_id'];
            $productImg = $row['product_img'];
            $productTitle = $row['product_title'];
            $productPrice = $row['product_price'];
?>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/<?php echo $productImg; ?>" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title"><?php echo $productTitle; ?></h2>
                            <p class="product-price"><?php echo $productPrice; ?></p>
                        </div>
                        <div class="text-bottom">
                            <a href="productDetails.php?pageId=<?php echo $productId; ?>" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
    }
?>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<!-- ==========  projects  Section End ========== -->


<?php
    include("footer.inc.php");
?>