<?php
    // call the product() function if sitesetting is clicked
    if (isset($_POST['product'])) {
        product();
    }

    // product
    function product(){
        global $db, $errors;

        
        $product_img          = $_FILES['product_img']['name'];
        $product_output_img  = time().'.jpg';
        $target             = "../images/product/".$product_output_img;
        
        $product_category = stripslashes($_REQUEST['product_category']);
        $product_category = mysqli_real_escape_string($db,$product_category);
        
        $product_title = stripslashes($_REQUEST['product_title']);
        $product_title = mysqli_real_escape_string($db,$product_title);
        
        $product_price = stripslashes($_REQUEST['product_price']);
        $product_price = mysqli_real_escape_string($db,$product_price);

        $product_discription = stripslashes($_REQUEST['product_discription']);
        $product_discription = mysqli_real_escape_string($db,$product_discription);

        date_default_timezone_set("Asia/Dubai");
        $product_created_date       = date('Y-m-d');
        $product_created_time       = date('H:i:s');


        $productSql = "INSERT INTO product (`product_img`, `product_category`, `product_price`, `product_title`, `product_discription`, `product_created_date`, `product_created_time`)
                          VALUES('$product_output_img', '$product_category', '$product_price', '$product_title', '$product_discription', '$product_created_date', '$product_created_time')";
                $productResult = mysqli_query($db, $productSql);

                if($productResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> product Submitted Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
                

        if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target)) {
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Success!</strong> product Image Uploaded Successfully.

                        </p>
                        </div>';
        }else{
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Failed!</strong> There Must be any problem i think!

                        </p>
                        </div>';
            }

    }


    
    if (isset($_POST['product_update'])) {
        product_update();
    }

    function product_update(){
        global $db, $errors;

        
        $product_id = stripslashes($_REQUEST['product_id']);
        $product_id = mysqli_real_escape_string($db,$product_id);
        
        $product_category = stripslashes($_REQUEST['product_category']);
        $product_category = mysqli_real_escape_string($db,$product_category);
        
        $product_title = stripslashes($_REQUEST['product_title']);
        $product_title = mysqli_real_escape_string($db,$product_title);
        
        $product_price = stripslashes($_REQUEST['product_price']);
        $product_price = mysqli_real_escape_string($db,$product_price);
        
        $product_discription = stripslashes($_REQUEST['product_discription']);
        $product_discription = mysqli_real_escape_string($db,$product_discription);


        $productUpdateSql = "UPDATE product SET `product_category` = '$product_category', `product_price` = '$product_price', `product_title` = '$product_title', `product_discription` = '$product_discription' WHERE `product_id` = '$product_id' ";
        $productUpdateResult = mysqli_query($db, $productUpdateSql);

        if($productUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> product Updated Successfully.

                </p>
                </div>';
        }
        else{
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                </p>
                </div>';
        }



    }
    
    if (isset($_POST['product_delete'])) {
        product_delete();
    }

    
    function product_delete(){
        global $db, $errors;

        
        $product_id = stripslashes($_REQUEST['product_id']);
        $product_id = mysqli_real_escape_string($db,$product_id);

        if($product_id){
  
           

                $productDeleteSql = "DELETE FROM product WHERE `product_id` = '$product_id' ";
                $productDeleteResult = mysqli_query($db, $productDeleteSql);

                if($productDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> product Deleted Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
            }

        }
?>