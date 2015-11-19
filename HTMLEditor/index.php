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
    <div class="header">
        HTML Editor 
        <input type="button" id="show" value="Run Code"> 
        <input type="button" value="Colors" onclick="location.href='colors.php';"> 
        Shortcut (Control + Enter ) 
    </div>
    <div class="code">
        
        HTML CODE HERE :
        <textarea id="html"></textarea>
        CSS CODE HERE
        <textarea id="css"></textarea>
        JAVASCRIPT CODE HERE
        <textarea id="js"></textarea>
        
    </div>
    
    <iframe cols="50%" id="display"></iframe>
    
    <script src="../src/js/htmleditor.js" type="text/javascript"></script>
 
</body>
</html>