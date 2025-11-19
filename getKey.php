<?php
  $usrLogin = trim(strip_tags($_POST["userlogin"]));
  $pass = trim(strip_tags($_POST["password"]));
  $subject = "Регистрация на сайте url_вашего_сайта";
  $msg = "Ваши данные формы регистрации:\n" ."Логин: $usrLogin\n" ."Ваш пароль: $pass\n" .;
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: Ваше_имя <ваш_email>" . "\r\n";
  $headers .= "Bcc: ваш_email". "\r\n";
  if(!empty($usrLogin) && !empty($pass) && !empty($usrLogin) && !empty($pass) && filter_var($usrLogin, FILTER_VALIDATE_EMAIL)){
    mail($usrLogin, pass, $subject, $msg, $headers);
    echo "Спасибо! Вы успешно зарегистрировались.";
    }
?>
