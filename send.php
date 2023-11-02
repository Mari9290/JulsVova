<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['surname'])) {$surname = $_POST['surname'];}
if (isset($_POST['presence'])) {$presence = $_POST['presence'];}       
if (isset($_POST['companion'])) {$companion = $_POST['companion'];}
if (isset($_POST['redwine'])) {$redwine = $_POST['redwine'];}
if (isset($_POST['whitewine'])) {$whitewine = $_POST['whitewine'];}
if (isset($_POST['champagne'])) {$champagne = $_POST['champagne'];}
if (isset($_POST['cognac'])) {$cognac = $_POST['cognac'];}
if (isset($_POST['moonshine'])) {$moonshine = $_POST['moonshine'];}
if (isset($_POST['softdrinks'])) {$softdrinks = $_POST['softdrinks'];}

/* Сюда впишите свою эл. почту */
$myaddres  = "marina9290@yandex.ru"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Гости на свадьбу\nИмя: $name\nФамилия: $surname";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Гости'; //сабж
$email='Гости на свадьбу'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1 class="header">Спасибо!</h1>
</body>
</html>