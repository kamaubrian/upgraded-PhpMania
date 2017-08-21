<?php
if($_GET["name"] || $_GET["age"]){
    echo"Welcome ".$_GET['name']."<br/>";
    echo "You Are".$_GET['age']."Years Old";
    exit();
}
?>