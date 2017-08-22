<?php
        if($_POST["name"] || $_POST["age"]){
            if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
                die("Invalid Name & Name Should be Alpha");
            }
            echo"Welcome".$_POST['name']."<br/>";
            echo"You are".$_POST['age']."Years Old.";
            exit();
             //To test, change the action to post.php and See Difference.
        }



?>