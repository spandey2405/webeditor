<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 28/11/15
 * Time: 10:48 PM
 */
include 'htmltags.php';
include 'csstags.php';
?>
<html>
<head>
    <script src="../src/js/jquery-1.10.2.js"></script>
    <style>
        table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
        }
        table tr td {
            border: 1px solid #cdcdcd;
            font-family: Arial;
            padding:5px;
            font-size: 12px;
            background: linear-gradient(to bottom, #fafafa 0%,#efefef 100%);
        }
    </style>
</head>
<body>
<textarea>

</textarea>

<div class="HTMLTags">
<table width="50%">
<!---->
<!---->
<!--    --><?php
//
//    foreach ($HTMLTags as $tag=>$value) {
//        print "<tr width='100%'>";
//        print "<td width='20%' valign='top'>".$tag."</td><td width='80%'>".$value."</td>";
//        print "</tr>";
//    }
//
//    ?>
</table>
</div>
<div class="HTMLTags">
    <div class="tags" style="overflow-y:scroll;width:48%;display:inline-block;margin:1%;height:600px;float:left;">
    <table>


        <?php

        foreach ($CSStags as $tag=>$value) {
            print "<tr width='100%'>";
            print "<td width='20%' valign='top' id='tag'>".$tag."</td><td width='80%'>".$value."</td>";
            print "</tr>";
        }

        ?>
    </table></div>
    <textarea style="width:48%;display:inline-block;margin:1%;height:600px;float:left" id="text"></textarea>
</div>
<script>
    $("td#tag").on('click', function() {
        var caretPos = document.getElementById("text").selectionStart;
        var textAreaTxt = $("#text").val();
        var txtToAdd = $(this).html()+" : ";
        $("#text").val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
        $("#text").focus();
    });
</script>
</body>
</html>
