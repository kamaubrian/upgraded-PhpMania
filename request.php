<?php
    if($_REQUEST["name"] || $_REQUEST["age"]){
        echo "Welcome".$_REQUEST['name']."<br/>";
        echo"You are".$_REQUEST['age']."<br/>";
        exit();
    }
    //Change to request.php in the Form

?>