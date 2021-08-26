<?php
    // call the whatwedo() function if sitesetting is clicked
    if (isset($_POST['whatwedo'])) {
        whatwedo();
    }

    // whatwedo
    function whatwedo(){
        global $db, $errors;

        $whatwedo_icon = stripslashes($_REQUEST['whatwedo_icon']);
        $whatwedo_icon = mysqli_real_escape_string($db,$whatwedo_icon);
        
        $whatwedo_title = stripslashes($_REQUEST['whatwedo_title']);
        $whatwedo_title = mysqli_real_escape_string($db,$whatwedo_title);

        $whatwedo_discription = stripslashes($_REQUEST['whatwedo_discription']);
        $whatwedo_discription = mysqli_real_escape_string($db,$whatwedo_discription);

        date_default_timezone_set("Asia/Dubai");
        $whatwedo_update_date       = date('Y-m-d');
        $whatwedo_update_time       = date('H:i:s');


        $whatwedoSql = "INSERT INTO whatwedo (`whatwedo_icon`, `whatwedo_title`, `whatwedo_discription`, `whatwedo_update_date`, `whatwedo_update_time`)
                          VALUES('$whatwedo_icon', '$whatwedo_title', '$whatwedo_discription', '$whatwedo_update_date', '$whatwedo_update_time')";
                $whatwedoResult = mysqli_query($db, $whatwedoSql);

                if($whatwedoResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> What We Offer Submitted Successfully.

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


    
    if (isset($_POST['whatwedo_update'])) {
        whatwedo_update();
    }

    function whatwedo_update(){
        global $db, $errors;

        
        $whatwedo_id = stripslashes($_REQUEST['whatwedo_id']);
        $whatwedo_id = mysqli_real_escape_string($db,$whatwedo_id);
        
        $whatwedo_icon = stripslashes($_REQUEST['whatwedo_icon']);
        $whatwedo_icon = mysqli_real_escape_string($db,$whatwedo_icon);
        
        $whatwedo_title = stripslashes($_REQUEST['whatwedo_title']);
        $whatwedo_title = mysqli_real_escape_string($db,$whatwedo_title);
        
        $whatwedo_discription = stripslashes($_REQUEST['whatwedo_discription']);
        $whatwedo_discription = mysqli_real_escape_string($db,$whatwedo_discription);


        $whatwedoUpdateSql = "UPDATE whatwedo SET `whatwedo_icon` = '$whatwedo_icon', `whatwedo_title` = '$whatwedo_title', `whatwedo_discription` = '$whatwedo_discription' WHERE `whatwedo_id` = '$whatwedo_id' ";
        $whatwedoUpdateResult = mysqli_query($db, $whatwedoUpdateSql);

        if($whatwedoUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> What We Offer Updated Successfully.

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
    
    if (isset($_POST['whatwedo_delete'])) {
        whatwedo_delete();
    }

    
    function whatwedo_delete(){
        global $db, $errors;

        
        
        $whatwedo_id = stripslashes($_REQUEST['whatwedo_id']);
        $whatwedo_id = mysqli_real_escape_string($db,$whatwedo_id);

        if($whatwedo_id){

                $whatwedoDeleteSql = "DELETE FROM whatwedo WHERE `whatwedo_id` = '$whatwedo_id' ";
                $whatwedoDeleteResult = mysqli_query($db, $whatwedoDeleteSql);

                if($whatwedoDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> What We Offer Deleted Successfully.

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