<?php

include 'header.tpl.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>

    <main>
        <form action="?url=login_action" method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="passwd" placeholder="Password">
            <button type="submit">Login</button>

    </main>


</body>
</html>