<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Online Web Creator</title>
  <link href="../src/css/style.css" rel="stylesheet" type="text/css"/>
  <script src="../src/js/jquery-1.10.2.js" type="text/javascript"></script>
  <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
</head>
<body>
        <?php include "../src/lib/header_editor.php";  display("Python"); ?>
    <div class="code" style="overflow-y: hidden;overflow-x: hidden;">
        
        Python Code Here :
        <textarea id="Python"></textarea>
        
    </div>
    
    <iframe cols="50%" id="display"></iframe>
    <script src="../src/js/pythoneditor.js" type="text/javascript"></script>

</body>
</html>