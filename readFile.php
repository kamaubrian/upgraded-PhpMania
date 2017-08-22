<?php
 /*       $filename = $_GET["file"];
        $file = fopen($filename,"r");
        if($file==false){
            echo("Error Reading File");
            exit();
        }
        $filesize =filesize($filename);
        $filetext = fread($file,$filesize);
        fclose($file);
        echo("File Size : $filesize bytes");
        echo ("<pre>$filetext</pre>");
    */
    $filename = "Php_Mania_August_Holiday.docx";
    $file=fopen($filename,"r");
    if($file==false){
        echo "Error Reading File";
        exit();
    }
    $filesize = filesize($filename);
    $filetext = fread($file,$filesize);
    fclose($file);
    echo "File Size : $filesize bytes";
    echo "<pr>$filetext</pr>";



?>