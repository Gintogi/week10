<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'admin' && $password ==='123456'){
        echo "<h2>Login successful!</h2>";
    }else{
        echo "<h2>Invalid username or password.</h2>";
    }

?>