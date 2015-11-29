/**
 * Created by sp on 26/11/15.
 */
$("#show").click(function() {
    var CodePHP = $("#PHPContent").val();
    var filename = $(".fileinfo").attr("id");
    var Token = $('Usertoken').attr("id");
    $.post( "../src/lib/phphandler.php",
        { File: filename , PHP: CodePHP})
        .done(function( data ) {
        $("#displayresult").attr("src", data);
    });
});
$(document).keydown(function (e) {
    if (e.ctrlKey && e.keyCode == 13) {
        $( "#show" ).click();
    }
});
$('#PHPContent').keydown(function (e) {
    if (e.ctrlKey && e.keyCode == 13) {
        $( "#show" ).click();
    }
});