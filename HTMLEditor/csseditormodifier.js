/**
 * Created by sp on 1/12/15.
 */
/**
 * Created by sp on 1/12/15.
 */
$('#CSSContent').ready( function () {
    var tabsinit = 0;
    $('#CSSContent').keydown(function (e) {
        if (e.keyCode == 13){
            var CurrentText = $(this).val();
            var Text = $(this).val().split('');
            var Operator = Text[Text.length-1];
            var tab = Array(4).join(" ");
            if (Operator == '{' || Operator == ';') {
                e.preventDefault();
                $(this).val(CurrentText+"\n"+tab);
            }
            else if (Operator == '}' && Text[Text.length-2] == ' ') {
                var CurrentText = CurrentText.split('\n');
                var Text2Add = '';
                CurrentText[CurrentText.length-1] = "}";

                for(var i = 0; i<=CurrentText.length-1; i++) {
                    Text2Add = Text2Add + CurrentText[i]+'\n';
                }
                $(this).val(Text2Add);
                e.preventDefault();
            }
            else {

            }

        }
    });
});
$.fn.setCursorPosition = function(pos) {
    this.each(function(index, elem) {
        if (elem.setSelectionRange) {
            elem.setSelectionRange(pos, pos);
        } else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    });
    return this;
};