$("#show").click(function() {
    var Python = document.getElementById("Python").value;
    $.post( "src/lib/createpythonfile.php", { code: Python }).done(function( data ) {
    $("#display").attr("src", data);
  });
});

$( document ).ready(function() {
    var height = $( window ).height()-60;
   $(".code").css("height", height);
   $("#display").css("height", height);
});

$(document).keydown(function (e) {

  if (e.ctrlKey && e.keyCode == 13) {
    $( "#show" ).click();
  }
});