<?php

function DisplayHeader($Page = 'None') {
    echo "<div class='header'>
        <ul>
            <table style=''>
                <tr>
                    <td width='20%'><img src='src/Template/image/horizontal.png' height='50'></td>
                    <td width='60%'>
                        <a href='http://developers.onlinecoder.in/Login'><li>Login</li></a>
                        <a href='http://developers.onlinecoder.in/Signup'><li>Signup</li></a>
                        <a href='HTMLEditor'><li>HTML</li></a>
                        <a href='PHPEditor'><li>PHP</li></a>
                    </td>
                </tr>
            </table>
        </ul>
    </div>";
}
?>