<?php

$fio = $_POST['form_name'];
$phone = $_POST['form_phone'];

mail("NKVDKD@gmail.com", "Сообщение с сайта:", "Имя:".$fio."\nТелефон:".$phone);
