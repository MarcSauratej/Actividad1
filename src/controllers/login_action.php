<?php
require 'lib/conn.php';
require APP.'/db/database.php';

$caja=filter_input(INPUT_POST, 'caja');

if(($email = filter_input(INPUT_POST,'email')) !=null and ($passwd = filter_input(INPUT_POST, 'passwd'))!=null){
    $gdb= getConnection( $dsn, $dbuser, $dbpasswd);
    if (auth($gdb,$email,$passwd)){
     if($caja == true){
        setcookie("ID",$email, 0,'/','localhost' );
     }
    header('Location:?url=dashboard');
    }  else{
        header('Location:?url=badlogin');
    }
}
header('Location:?url=badlogin');
