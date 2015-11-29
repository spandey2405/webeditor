<?php
include 'header.php';
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Online Coder</title>
    <meta charset="utf-8">
    <link href="src/Template/css/header.css" rel="stylesheet" type="text/css">
    <link href="src/css/sidemenu.css" rel="stylesheet" type="text/css">
    <script src="src/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-70830242-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<?php DisplayHeader('Main Page') ?>
<div class="mainbody">
    <h1>
        Online HTML Editor
    </h1>
    <p> With this dynamic <i><b>HTML Editor</b></i> you can get you can code online.<br>
        Its too simple , Just write down the code and press control + Enter ! Enjoy Coding.
        <br><br> <input type="button" value="Go To HTML Editor" onclick="location.href='../HTMLEditor/';">
    </p>
    <h1>
        Online PHP Editor
    </h1>
    <p> With this dynamic <i><b>PHP Editor</b></i> you can get you can code online.<br>
        Its too simple , Just write down the code and press control + Enter ! Enjoy Coding.
        <br><br> <input type="button" value="Go To PHP Editor" onclick="location.href='../PHPEditor/';">
    </p>
    <h1>
        HTML Colors
    </h1>
    <p> With this dynamic <i><b>HTML color table</b></i> you can get HTML codes for all basic colors been used today.<br>
        Its too simple , click on any color square to get its HTML color code copied ! Use it anywhere.
        <br><br>
        <input type="button" value="Watch This" onclick="window.open('http://onlinecoder.in/Colors/', '_blank');">

    </p>
        </table>
    </center>
</div>
</body>
</html>
