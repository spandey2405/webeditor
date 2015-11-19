<?php

if($_POST) {
    
    $filename = uniqid().".py";
    $file = "../tmp/".$filename;
    $fileout = "src/tmp/".$filename;
    $myfile = fopen($file, "a") or die("Unable to open file!");
    fwrite($myfile, "#!/usr/bin/python\n");
    fwrite($myfile, "print('Content-type: text/html\\r\\n\\r')\n");
    $phpcode = $_POST['code'];
    fwrite($myfile, $phpcode);
    fclose($myfile); 
    echo $fileout;
}

?>

