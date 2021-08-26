<?php
    // call the slider() function if sitesetting is clicked
    if (isset($_POST['slider'])) {
        slider();
    }

    // slider
    function slider(){
        global $db, $errors;

        
        $slider_img          = $_FILES['slider_img']['name'];
        $slider_output_img  = time().'.jpg';
        $target             = "../images/slider/".$slider_output_img;
        
        $slider_title = stripslashes($_REQUEST['slider_title']);
        $slider_title = mysqli_real_escape_string($db,$slider_title);

        $slider_discription = stripslashes($_REQUEST['slider_discription']);
        $slider_discription = mysqli_real_escape_string($db,$slider_discription);

        $slider_link = stripslashes($_REQUEST['slider_link']);
        $slider_link = mysqli_real_escape_string($db,$slider_link);

        date_default_timezone_set("Asia/Dubai");
        $slider_created_date       = date('Y-m-d');
        $slider_created_time       = date('H:i:s');


        $sliderSql = "INSERT INTO slider (`slider_img`, `slider_link`, `slider_title`, `slider_discription`, `slider_created_date`, `slider_created_time`)
                          VALUES('$slider_output_img', '$slider_link', '$slider_title', '$slider_discription', '$slider_created_date', '$slider_created_time')";
                $sliderResult = mysqli_query($db, $sliderSql);

                if($sliderResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Slider Submitted Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
                

        if (move_uploaded_file($_FILES['slider_img']['tmp_name'], $target)) {
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Success!</strong> Slider Image Uploaded Successfully.

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


    
    if (isset($_POST['slider_update'])) {
        slider_update();
    }

    function slider_update(){
        global $db, $errors;

        
        $slider_id = stripslashes($_REQUEST['slider_id']);
        $slider_id = mysqli_real_escape_string($db,$slider_id);
        
        $slider_link = stripslashes($_REQUEST['slider_link']);
        $slider_link = mysqli_real_escape_string($db,$slider_link);
        
        $slider_title = stripslashes($_REQUEST['slider_title']);
        $slider_title = mysqli_real_escape_string($db,$slider_title);
        
        $slider_discription = stripslashes($_REQUEST['slider_discription']);
        $slider_discription = mysqli_real_escape_string($db,$slider_discription);


        $sliderUpdateSql = "UPDATE slider SET `slider_link` = '$slider_link', `slider_title` = '$slider_title', `slider_discription` = '$slider_discription' WHERE `slider_id` = '$slider_id' ";
        $sliderUpdateResult = mysqli_query($db, $sliderUpdateSql);

        if($sliderUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Slider Updated Successfully.

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
    
    if (isset($_POST['slider_delete'])) {
        slider_delete();
    }

    
    function slider_delete(){
        global $db, $errors;

        
        $slider_id = stripslashes($_REQUEST['slider_id']);
        $slider_id = mysqli_real_escape_string($db,$slider_id);

        if($slider_id){
  
           

                $sliderDeleteSql = "DELETE FROM slider WHERE `slider_id` = '$slider_id' ";
                $sliderDeleteResult = mysqli_query($db, $sliderDeleteSql);

                if($sliderDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Slider Deleted Successfully.

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