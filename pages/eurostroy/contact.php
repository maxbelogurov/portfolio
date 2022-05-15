<?php
 
$post = (!empty($_POST)) ? true : false;
 
if($post)
{
$name = htmlspecialchars($_POST['name']);
$tel = htmlspecialchars($_POST["phone"]);
$lic = htmlspecialchars($_POST["lic"]);
$error = '';
 
 if($lic){
if(!$name)
{
$error .= 'Пожалуйста введите ваше имя<br />';
}
 
// Проверка телефона
function ValidateTel($valueTel)
{
$regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$error)
 
// (length)

if(!$error)
{
 
 
$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";
 
$subject ="Новая заявка с сайта eurostroy39.ru";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
$message1 ="\n\nИмя: ".$name."\n\nТелефон: " .$tel."\n\n";    
 
 
$header = "Content-Type: text/plain; charset=utf-8\n";
 
$header .= "From: Новая заявка <robot@blogmax.ru>\n\n";  
$mail = mail("maxbelogurov@gmail.com", $subject1, $message1, iconv ('utf-8', 'windows-1251', $header));
 
if($mail)
{
echo 'OK';
}
 
}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}
 }
}
?>