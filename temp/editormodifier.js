/**
 * Created by sp on 1/12/15.
 */
$('.Content').ready( function () {
    var tabsinit = 0;
    $('.Content').keydown(function (e) {
        if (e.keyCode == 13){
            var CurrentText = $(this).val();
            var Text = $(this).val().split('\n');
            var CurrentCommand = Text[Text.length-1];
            var check = (check_command(CurrentCommand));

            if (check == 1) {
                tabsinit += 4;
                var tab =" ".repeat(tabsinit);
                $(this).val(CurrentText+"\n"+tab);
                e.preventDefault();
            }
            else if (check == 2) {
                tabsinit -= 4;
                CurrentText = '';
                Text[Text.length-1] = CurrentCommand.replace('    ','');

                for(var i= 0; i<=Text.length-1; i++)
                {
                    CurrentText = CurrentText  + Text[i]+ '\n';
                }
                var tab =" ".repeat(tabsinit);
                $(this).val(CurrentText+tab);
                e.preventDefault();
            }

        }
    });
});

function check_command(command) {
    var check = 0;
    command = command.replace('<','');
    command = command.replace('>','');
    command = command.replace(/ /g,'');
    var commands = ['div','html','head','script','style','span','body'];
    for (var i = 0; i < commands.length; i++) {
        if (command == commands[i]){
            check = 1;
        }
        else if (command == "/"+commands[i]){
            check = 2;
        }
        else {

        }

    }
    return check;
}
