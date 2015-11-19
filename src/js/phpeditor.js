$("#show").click(function() {
    var PHP = document.getElementById("PHP").value;
    $.post( "src/lib/createphpfile.php", { code: PHP}).done(function( data ) {
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