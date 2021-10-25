<?php
require 'lib/conn.php';
require APP.'/db/database.php';


if(($email = filter_input(INPUT_POST,'email')) !=null and ($passwd = filter_input(INPUT_POST, 'passwd'))!=null){
    $gdb= getConnection( $dsn, $dbuser, $dbpasswd);
    if (auth($gdb,$email,$passwd)){
    
    header('Location:?url=dashboard');
    }  else{
        header('Location:?url=badlogin');
    }
}
header('Location:?url=badlogin');
