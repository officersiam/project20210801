<?php
	// call the sitesetting() function if sitesetting is clicked
	if (isset($_POST['sitesetting'])) {
		sitesetting();
	}

    // site setting
    function sitesetting(){
        global $db, $errors;

        // receive all input values from the form
        $site_setting_name = stripslashes($_REQUEST['site_setting_name']);
        $site_setting_name = mysqli_real_escape_string($db,$site_setting_name);

        $site_setting_title = stripslashes($_REQUEST['site_setting_title']);
        $site_setting_title = mysqli_real_escape_string($db,$site_setting_title);

        $site_setting_slogan = stripslashes($_REQUEST['site_setting_slogan']);
        $site_setting_slogan = mysqli_real_escape_string($db,$site_setting_slogan);

        $site_setting_adress = stripslashes($_REQUEST['site_setting_adress']);
        $site_setting_adress = mysqli_real_escape_string($db,$site_setting_adress);

        $site_setting_phone = stripslashes($_REQUEST['site_setting_phone']);
        $site_setting_phone = mysqli_real_escape_string($db,$site_setting_phone);
        
        $site_setting_email = stripslashes($_REQUEST['site_setting_email']);
        $site_setting_email = mysqli_real_escape_string($db,$site_setting_email);
        
        $site_setting_description = stripslashes($_REQUEST['site_setting_description']);
        $site_setting_description = mysqli_real_escape_string($db,$site_setting_description);

        date_default_timezone_set("Asia/Dubai");
        $site_setting_last_update_date       = date('Y-m-d');
        $site_setting_last_update_time       = date('H:i:s');

        // form validation: ensure that the form is correctly filled
        if (empty($site_setting_name)) {
            array_push($errors, "Site Name is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $site_setting_sql = "UPDATE site_setting  SET `site_setting_name`='$site_setting_name', `site_setting_title`='$site_setting_title', `site_setting_slogan`='$site_setting_slogan', `site_setting_adress`='$site_setting_adress', `site_setting_phone`='$site_setting_phone', `site_setting_email`='$site_setting_email',  `site_setting_description`='$site_setting_description', `site_setting_last_update_date`='$site_setting_last_update_date', `site_setting_last_update_time`='$site_setting_last_update_time'";
        $site_setting_result = mysqli_query($db, $site_setting_sql);

        if($site_setting_result){
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="font-size:20px">×</span>
                  </button><strong>Success!</strong> Site Settings Updated Successfully.

                        </p>
                        </div>';
        }
        else{
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="font-size:20px">×</span>
                  </button><strong>Failed!</strong> There Must be any problem i think!

                        </p>
                        </div>';
        }

        }

    }


    // call the logo() function if trainee is clicked
    if (isset($_POST['site_setting_logo_update'])) {
        site_setting_logo_update();
    }

    // logo
    function site_setting_logo_update(){
        global $db, $errors;

        // receive all input values from the form
        $site_setting_logo   = $_FILES['site_setting_logo']['name'];
        $target1    = "../images/".basename($site_setting_logo);

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $site_setting_logo_update_sql = "UPDATE site_setting SET site_setting.site_setting_logo = '$site_setting_logo' ";
                $site_setting_logo_update_result = mysqli_query($db, $site_setting_logo_update_sql);
/*
                if($site_setting_logo_update_result){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Logo Uploaded Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
*/
        if (move_uploaded_file($_FILES['site_setting_logo']['tmp_name'], $target1)) {
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Success!</strong> Uploaded Successfully.

                        </p>
                        </div>';
        }else{
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Failed!</strong> to upload logo!

                        </p>
                        </div>';
            }

        }

    }

    


    // call the icon() function if trainee is clicked
    if (isset($_POST['site_setting_icon_update'])) {
        site_setting_icon_update();
    }

    // icon
    function site_setting_icon_update(){
        global $db, $errors;

        // receive all input values from the form
        $site_setting_icon   = $_FILES['site_setting_icon']['name'];
        $target2    = "../images/".basename($site_setting_icon);

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $site_setting_icon_update_sql = "UPDATE site_setting SET site_setting.site_setting_icon = '$site_setting_icon' ";
                $site_setting_icon_update_result = mysqli_query($db, $site_setting_icon_update_sql);
/*
                if($site_setting_icon_update_result){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Icon Uploaded Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
*/
        if (move_uploaded_file($_FILES['site_setting_icon']['tmp_name'], $target2)) {
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Success!</strong> Uploaded Successfully.

                        </p>
                        </div>';
        }else{
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Failed!</strong> to upload logo!

                        </p>
                        </div>';
            }

        }

    }
?>