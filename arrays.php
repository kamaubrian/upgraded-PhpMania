<?php

    //Associative Arrays

    $salaries = array("Muhammad"=>5000,"Zara"=> 3000,"Wangamati"=>2000);
    $name=array("Muhammad","Zara","Wangamati");
    foreach($salaries as $value){

            Echo "Salaries for is $value<br/>";
    }
    //Multi-Dimensional Arrays
    $marks = array(
        "muhammad"=>array(
            "Physics" => 35,
            "Maths" => 30,
            "Chemistry" =>39
        ),
        "Brian" =>array(
            "Physics"=>89,
            "Maths"=>88,
            "Chemistry"=>95
        ),
        "Jeniffer"=>array(
            "Physics"=>90,
            "Maths"=>90,
            "Chemistry"=>92

        )
    );
    echo "Marks for Muhammad in Physics is";
    echo $marks(['muhammad']);





?>