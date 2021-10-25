<?php

require 'lib/conn.php';
include APP.'/db/database.php';

if(($username = filter_input(INPUT_POST,'username')) !=null and ($rolstatus = filter_input(INPUT_POST,'rolstatus')) !=null and  ($email = filter_input(INPUT_POST,'email')) !=null and ($passwd = filter_input(INPUT_POST, 'passwd'))!=null){
    $gdb= getConnection( $dsn, $dbuser, $dbpasswd);
    if (register($gdb,$username,$passwd, $email,$rolstatus)){
    
    header('Location:src/templates/dashboard.tpl.php');
    } else{
        header('Location:src/templates/badlogin.tpl.php');
    }
    
}

header('Location:src/templates/badlogin.tpl.php');

