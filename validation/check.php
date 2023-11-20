<?php 
   $login=filter_var(trim($_POST['login']));
   $Email=filter_var(trim($_POST['Email'])); 
   $pass=filter_var(trim($_POST['pass'])); 

   if(mb_strlen($login) < 1 || mb_strlen($login)>30){
    echo "Недопустимая длина Логина (от 4 до 30 символов)";
    exit();
   }
   else if(mb_strlen($Email) < 1 || mb_strlen($Email)>50){
    echo"Недопустимая длина Email (от 10 до 50 символов)";
    exit();
   }
   else if(mb_strlen($pass) < 1 || mb_strlen($pass)>32){
    echo"Недопустимая длина Пароля (от 10 до 32 символов)";
    exit();
   }
   $pass=md5($pass."8430lodfo332");
   $mysql = new mysqli('localhost','root','root','register');
   $mysql->query("INSERT INTO `users`(`login`,`password`,`email`)
   VALUES('$login', '$pass', '$Email')");
   $mysql->close();
   header('location: /')
?>