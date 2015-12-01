<html>
<head>
    <style>
        .Content {
            background: #2E2E2E;
            font-size: 12px;
            color: #FAFAFA;
            width: 98%;
            height: 40%;
            padding: 1%;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }
    </style>
    <script src="../src/js/jquery-1.10.2.js"></script>
</head>
<body>
<textarea class="Content" id="HTMLContent" style="height: 576px;"></textarea>
<script>
    $('.Content').ready( function () {
        var init = 0;
        var tabsinit = 0;
        $('.Content').keydown(function (e) {
            if (e.keyCode){
                if (($( this ).val().substr($( this ).val().length-1)) == "<") {
                    init = $( this ).val().length;
                }

                if (e.keyCode == 13) {
                    if (($( this ).val().substr($( this ).val().length-1)) == ">")
                    var command = $( this ).val().substr(init,$( this ).val().length-2);
                    var check = check_command(command);
                    var previous = $(this).val();

                    if (check == 1) {
                        tabsinit += 4;
                        init = 0;
                        var tab =" ".repeat(tabsinit);
                        $(this).val(previous+"\n"+tab);

                    }
                    else if (check == 2) {
                        tabsinit  -=4;
                        init = 0;
                        var tab =" ".repeat(tabsinit);
                        var previous = previous.split("\n");
                        var length = (previous.length)-1;
                        previous[length] = previous[length].replace('    ','');
                        var newchar = '';
                        for(var i= 0; i<=length; i++)
                        {
                            newchar = newchar  + previous[i]+ '\n';
                        }
                        $(this).val(newchar+tab);
                    }
                    else {
                        var tab =" ".repeat(tabsinit);
                        $(this).val(previous+"\n"+tab);
                    }
//                    alert(check);
                    e.preventDefault();





                }
            }
        });
    });

    function check_command(command) {
        var check = 0;
        var commands = ['div','html','head','script','style','span','body'];
        for (var i = 0; i < commands.length; i++) {
            if (command == commands[i]){
                check = 1;
            }
            else if (command == "/"+commands[i]){
                check = 2;
            }
            else if (command == commands[i]+">"){
                check = 1;
            }
            else if (command == "/"+commands[i]+">"){
                check = 2;
            }
            else {

            }

        }
        return check;
    }



</script>
</body>
</html>