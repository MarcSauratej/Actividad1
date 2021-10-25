<?php

function auth($gdb,$email,$passwd):bool{
    try{ 

        $stmt=$gdb->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt->execute([':email'=>$email]);
        $count=$stmt->rowCount();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if($count==1){
            $user=$row[0];
            $res=password_verify($passwd,$user['passwd']);
            if ($res){ 
                $_SESSION['passwd']=$user['passwd'];
                $_SESSION['email']=$user['email'];
                return true;
            }else{ 
                return false;
             } 
            }else{ 
                return false;
            } 
        }catch(PDOException $e){ 
            return false;
         } 
}


function register ($gdb,$username, $passwd,$email,$rolstatus):string{
    try{
    $stmt = $gdb->prepare("INSERT INTO school (username, passwd, email,rolstatus) VALUES (?, ?, ?, ?)");
    $username = "username";
    $passwd = "passwd";
    $email = "email";
    $rolstatus ="rolstatus";
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $passwd);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $rolstatus);
    // Excecute
    $stmt->execute();
    }catch (PDOException $e){
        die($e-> getMessage());
    }
}