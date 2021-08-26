<?php
    // call the category() function if sitesetting is clicked
    if (isset($_POST['category'])) {
        category();
    }

    // category
    function category(){
        global $db, $errors;
        
        $category_title = stripslashes($_REQUEST['category_title']);
        $category_title = mysqli_real_escape_string($db,$category_title);

        $category_short = stripslashes($_REQUEST['category_short']);
        $category_short = mysqli_real_escape_string($db,$category_short);

        $category_lebel = stripslashes($_REQUEST['category_lebel']);
        $category_lebel = mysqli_real_escape_string($db,$category_lebel);

        date_default_timezone_set("Asia/Dubai");
        $category_created_date       = date('Y-m-d');
        $category_created_time       = date('H:i:s');


        $categorySql = "INSERT INTO category (`category_lebel`, `category_title`, `category_short`, `category_created_date`, `category_created_time`)
                          VALUES('$category_lebel', '$category_title', '$category_short', '$category_created_date', '$category_created_time')";
                $categoryResult = mysqli_query($db, $categorySql);

                if($categoryResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> category Submitted Successfully.

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


    
    if (isset($_POST['category_update'])) {
        category_update();
    }

    function category_update(){
        global $db, $errors;

        
        $category_id = stripslashes($_REQUEST['category_id']);
        $category_id = mysqli_real_escape_string($db,$category_id);
        
        $category_lebel = stripslashes($_REQUEST['category_lebel']);
        $category_lebel = mysqli_real_escape_string($db,$category_lebel);
        
        $category_title = stripslashes($_REQUEST['category_title']);
        $category_title = mysqli_real_escape_string($db,$category_title);
        
        $category_short = stripslashes($_REQUEST['category_short']);
        $category_short = mysqli_real_escape_string($db,$category_short);


        $categoryUpdateSql = "UPDATE category SET `category_lebel` = '$category_lebel', `category_title` = '$category_title', `category_short` = '$category_short' WHERE `category_id` = '$category_id' ";
        $categoryUpdateResult = mysqli_query($db, $categoryUpdateSql);

        if($categoryUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> category Updated Successfully.

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
    
    if (isset($_POST['category_delete'])) {
        category_delete();
    }

    
    function category_delete(){
        global $db, $errors;

        
        $category_id = stripslashes($_REQUEST['category_id']);
        $category_id = mysqli_real_escape_string($db,$category_id);

        if($category_id){
  
           

                $categoryDeleteSql = "DELETE FROM category WHERE `category_id` = '$category_id' ";
                $categoryDeleteResult = mysqli_query($db, $categoryDeleteSql);

                if($categoryDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> category Deleted Successfully.

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