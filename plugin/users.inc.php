<?php

    if (isset($_POST['users_update_user'])) {
        users_update_user();
    }

    function users_update_user(){
    global $db, $errors;

    $picci_id = stripslashes($_REQUEST['picci_id']);
    $picci_id = mysqli_real_escape_string($db,$picci_id);
    
    $picci_full_name = stripslashes($_REQUEST['picci_full_name']);
    $picci_full_name = mysqli_real_escape_string($db,$picci_full_name);
    
    $picci_username = stripslashes($_REQUEST['picci_username']);
    $picci_username = mysqli_real_escape_string($db,$picci_username);
    
    
    $picci_email = stripslashes($_REQUEST['picci_email']);
    $picci_email = mysqli_real_escape_string($db,$picci_email);
    
    
    $picci_phone = stripslashes($_REQUEST['picci_phone']);
    $picci_phone = mysqli_real_escape_string($db,$picci_phone);
    
    
    $picci_address = stripslashes($_REQUEST['picci_address']);
    $picci_address = mysqli_real_escape_string($db,$picci_address);

    // register user if there are no errors in the form
    if (count($errors) == 0) {

            $userupdateusersql = "UPDATE picci SET picci.picci_full_name = '$picci_full_name', picci.picci_username = '$picci_username', picci.picci_email = '$picci_email', picci.picci_phone = '$picci_phone', picci.picci_address = '$picci_address' WHERE picci.picci_id = '$picci_id' ";

            $userupdateuserresult = mysqli_query($db, $userupdateusersql);

            if($userupdateuserresult){
                echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Updated User Profile.

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


    // call the users_password() function if trainee is clicked
    if (isset($_POST['users_password'])) {
        users_password();
    }

    function users_password(){
        global $db, $errors;

        
        $picci_id = stripslashes($_REQUEST['picci_id']);
        $picci_id = mysqli_real_escape_string($db,$picci_id);
        
        $new_pass = stripslashes($_REQUEST['new_pass']);
        $new_pass = mysqli_real_escape_string($db,$new_pass);
        
        $repeat_pass = stripslashes($_REQUEST['repeat_pass']);
        $repeat_pass = mysqli_real_escape_string($db,$repeat_pass);
        

        if ($new_pass != $repeat_pass) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
            $password = md5($new_pass);

                $passSql = "UPDATE `picci` SET `picci_password` = '$password' WHERE `picci_id` = '$picci_id' ";

                $passResult = mysqli_query($db, $passSql);

                if($passResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Updated User Profile.

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



    // call the users_image_update() function if trainee is clicked
    if (isset($_POST['users_image_update'])) {
        users_image_update();
    }

    // users_image_update
    function users_image_update(){
        global $db, $errors;

        
        $picci_id = stripslashes($_REQUEST['picci_id']);
        $picci_id = mysqli_real_escape_string($db,$picci_id);
        $picci_profile_pic = $_FILES['picci_profile_pic']['name'];
        $target = "../images/users/".basename($picci_profile_pic);

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $uploadUserSql = "UPDATE picci SET picci.picci_profile_pic = '$picci_profile_pic' WHERE picci.picci_id = '$picci_id' ";
                mysqli_query($db, $uploadUserSql);

                if (move_uploaded_file($_FILES['picci_profile_pic']['tmp_name'], $target)) {
                    echo "Image Submited Successfully.";

            }else{
            echo "<div class=\"uk-alert-success\" uk-alert>
    <a class=\"uk-alert-close\" uk-close></a><p><strong>Only</strong> PNG, JPG and JPEG file supported.

                        </p>
                        </div>";
        }

    }
}
?>