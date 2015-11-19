$("#show").click(function() {
    var html = document.getElementById("html").value;
    var css = document.getElementById("css").value;
    var js = document.getElementById("js").value;
    var Headcss = "<style>"+ css + "</style>";
    var Headjs = "<script>"+ js + "</script>";
    var HeadHTML = html;
    document.getElementById("display").innerHTML = Headcss+HeadHTML;
    var $frame = $('iframe');
    var doc = $frame[0].contentWindow.document;
    var $head = $('head',doc);
    var $body = $('body',doc);
    $head.html(Headcss+Headjs);
//    $head.html(Headjs);
    $body.html(HeadHTML);
});

$( document ).ready(function() {
    var height = $( window ).height()-60;
   $(".code").css("height", height);
   $("#display").css("height", height);
   document.getElementById('css').contentEditable='true';
   document.getElementById('html').contentEditable='true';
});

$(document).keydown(function (e) {

  if (e.ctrlKey && e.keyCode == 13) {
    $( "#show" ).click();
  }
});