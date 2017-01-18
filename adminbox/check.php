<?php
session_start();

$code = trim($_POST['code']);

if($code==$_SESSION["check"]){
       echo '1';
    }

?>
