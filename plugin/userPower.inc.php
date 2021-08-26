<?php
	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

    function isuser()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']['picci_user_type'] == 'User' ) {
            return true;
        }else{
            return false;
        }
    }

    function isAdmin()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']['picci_user_type'] == 'Admin' ) {
            return true;
        }else{
            return false;
        }
    }
?>