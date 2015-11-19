$("td").click(function() {
   var color = $( this ).css( "background-color" );
   var hexcode = rgb2hex(color).toUpperCase();
   $('.colors').css('background-color',color);
   $('.codes').css('border','1px solid #D8D8D8');
   $('.codes').html(hexcode);
   $( '.info' ).html( "" );
});


function rgb2hex(rgb) {
var hexDigits = ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"];
rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
function hex(x) {
return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
}
return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}


function copyToClipboard(element) {
var $temp = $("<input>");
$("body").append($temp);
$temp.val($(element).html()).select();
document.execCommand("copy");
$temp.remove();
$('.info').html("Copied !");
}