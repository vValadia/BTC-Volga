<?php
   $login=filter_var(trim($_POST['login']));
   $pass=filter_var(trim($_POST['pass'])); 
   $pass=md5($pass."8430lodfo332");
   $mysql = new mysqli('localhost','root','root','register');

   $result= $mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `password`= '$pass'");
   
   $user = $result->fetch_assoc();
    

    if(isset($user) == false){
        echo "Такой пользователь не найден";
        exit();
    }
    setcookie('user', $user['login'], time()+3600, "/");

   $mysql->close();
   header('location: /')
?>