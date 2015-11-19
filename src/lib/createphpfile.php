<?php

if($_POST) {
    
    $filename = uniqid().".php";
    $file = "../tmp/".$filename;
    $fileout = "../src/tmp/".$filename;
    $myfile = fopen($file, "w") or die("Unable to open file!");
    $phpcode = $_POST['code'];
    fwrite($myfile, $phpcode);
    fclose($myfile); 
    echo $fileout;
}

?>

