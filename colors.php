<html>
    <head>
        <title>HTML Color Codes </title>
        <link href="src/css/colors.css" rel="stylesheet" type="text/css"/>
        <script src="src/js/jquery-1.10.2.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>
            HTML Colors
        </h1>
        <p> With this dynamic <i><b>HTML color table</b></i> you can get HTML codes for all basic colors been used today.<br>
Its too simple , click on any color square to get its HTML color code copied ! Use it anywhere. 
        </p>
        <table>
            <?php include 'src/lib/colors.php'; ?>
        </table>
        <div class="showcolor">
            <div class="colors"></div>
            <div class="codes" onclick="copyToClipboard('.codes')" contenteditable></div>
            <div class="info"></div>
        </div>
        <script src="src/js/colors.js" type="text/javascript"></script>
    </body>
</html>