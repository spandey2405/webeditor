<?php
if($_POST) {    
array_map('unlink', glob("../tmp/*.php"));
}


