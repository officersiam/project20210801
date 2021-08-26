<?php
	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

    // LOGIN USER
    function login(){
        global $db, $username, $errors;

        // grap form values
        $picci_username = stripslashes($_REQUEST['picci_username']);
        $picci_username = mysqli_real_escape_string($db,$picci_username);
        
        $upass = stripslashes($_REQUEST['picci_password']);
        $upass = mysqli_real_escape_string($db,$upass);

        // make sure form is filled properly
        if (empty($picci_username)) {
            array_push($errors, "Username is required");
        }
        if (empty($upass)) {
            array_push($errors, "Password is required");
        }
        // attempt login if no errors on form
        if (count($errors) == 0) {
            $picci_password = md5($upass);

            $picci_query = "SELECT * FROM picci WHERE `picci_username`='$picci_username' AND `picci_password`='$picci_password' LIMIT 1";
            $picci_results = mysqli_query($db, $picci_query);


            if (mysqli_num_rows($picci_results) == 1) { // user found
                // check if user is staff or user
                $logged_in_user = mysqli_fetch_assoc($picci_results);
                    $_SESSION['user'] = $logged_in_user;
                    echo '';
                }
                else{
                    echo '<div style="width:50%;margin-top:100px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true" style="font-size:20px">×</span>
                    </button><strong>Failed!</strong> Wrong username/password combination.

                        </p>
                        </div>';

            }
        }
    }

?>