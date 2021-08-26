<?php
    // call the contact() function if sitesetting is clicked
    if (isset($_POST['send'])) {
        contact();
    }

    // contact
    function contact(){
        global $db, $errors;

        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($db,$name);
        
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($db,$email);
        
        $massage = stripslashes($_REQUEST['massage']);
        $massage = mysqli_real_escape_string($db,$massage);

        date_default_timezone_set("Asia/Dhaka");
        $contact_created_date       = date('Y-m-d');
        $contact_created_time       = date('H:i:s');


        $contactSql = "INSERT INTO contact (`name`, `email`,, `massage`, `contact_created_date`, `contact_created_time`)
                          VALUES('$name', '$email',, '$massage', '$contact_created_date', '$contact_created_time')";
                $contactResult = mysqli_query($db, $contactSql);

                if($contactResult){
                    echo '';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }

    }


    
    if (isset($_POST['contact_update'])) {
        contact_update();
    }

    function contact_update(){
        global $db, $errors;

        
        $contact_id = stripslashes($_REQUEST['contact_id']);
        $contact_id = mysqli_real_escape_string($db,$contact_id);

        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($db,$name);
        
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($db,$email);
        
        $massage = stripslashes($_REQUEST['massage']);
        $massage = mysqli_real_escape_string($db,$massage);


        $contactUpdateSql = "UPDATE contact SET `name` = '$name', `email` = '$email', `massage` = '$massage' WHERE `contact_id` = '$contact_id' ";
        $contactUpdateResult = mysqli_query($db, $contactUpdateSql);

        if($contactUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> contact Updated Successfully.

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
    
    if (isset($_POST['contact_delete'])) {
        contact_delete();
    }

    
    function contact_delete(){
        global $db, $errors;

        
        
        $contact_id = stripslashes($_REQUEST['contact_id']);
        $contact_id = mysqli_real_escape_string($db,$contact_id);

        if($contact_id){

                $contactDeleteSql = "DELETE FROM contact WHERE `contact_id` = '$contact_id' ";
                $contactDeleteResult = mysqli_query($db, $contactDeleteSql);

                if($contactDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> contact Deleted Successfully.

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