<?php
    // call the plugin() function if sitesetting is clicked
    if (isset($_POST['plugin'])) {
        plugin();
    }

    // plugin
    function plugin(){
        global $db, $errors;

        $plugin_name = stripslashes($_REQUEST['plugin_name']);
        $plugin_name = mysqli_real_escape_string($db,$plugin_name);
        
        $plugin_action = stripslashes($_REQUEST['plugin_action']);
        $plugin_action = mysqli_real_escape_string($db,$plugin_action);

        date_default_timezone_set("Asia/Dubai");
        $plugin_created_date       = date('Y-m-d');
        $plugin_created_time       = date('H:i:s');


        $pluginSql = "INSERT INTO plugin_database (`plugin_name`, `plugin_action`, `plugin_created_date`, `plugin_created_time`)
                          VALUES('$plugin_name', '$plugin_action', '$plugin_created_date', '$plugin_created_time')";
                $pluginResult = mysqli_query($db, $pluginSql);

                if($pluginResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Plugin Submitted Successfully.

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


    
    if (isset($_POST['plugin_update'])) {
        plugin_update();
    }

    function plugin_update(){
        global $db, $errors;

        
        $plugin_id = stripslashes($_REQUEST['plugin_id']);
        $plugin_id = mysqli_real_escape_string($db,$plugin_id);

        $plugin_name = stripslashes($_REQUEST['plugin_name']);
        $plugin_name = mysqli_real_escape_string($db,$plugin_name);
        
        $plugin_action = stripslashes($_REQUEST['plugin_action']);
        $plugin_action = mysqli_real_escape_string($db,$plugin_action);


        $pluginUpdateSql = "UPDATE plugin_database SET `plugin_name` = '$plugin_name', `plugin_action` = '$plugin_action' WHERE `plugin_id` = '$plugin_id' ";
        $pluginUpdateResult = mysqli_query($db, $pluginUpdateSql);

        if($pluginUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Plugin Updated Successfully.

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
    
    if (isset($_POST['plugin_delete'])) {
        plugin_delete();
    }

    
    function plugin_delete(){
        global $db, $errors;

        
        
        $plugin_id = stripslashes($_REQUEST['plugin_id']);
        $plugin_id = mysqli_real_escape_string($db,$plugin_id);

        if($plugin_id){

                $pluginDeleteSql = "DELETE FROM plugin_database WHERE `plugin_id` = '$plugin_id' ";
                $pluginDeleteResult = mysqli_query($db, $pluginDeleteSql);

                if($pluginDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Plugin Deleted Successfully.

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