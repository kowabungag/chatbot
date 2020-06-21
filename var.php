<?php
const TOKEN = '1188039782:AAHeIj5nGHpp2HHSv7L0vn4tT6azRgbrCBY';
const BASEURL = 'https://api.telegram.org/bot' . TOKEN . '/';
$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);
$b = 'Погода';
$button_1 = array('text' => 'Перейти в главное меню', 'callback_data' => '/lang_english');
$button_2 = array('text' => 'Перейти в другое меню', 'callback_data' => '/lang_russian');
$button_3 = array('text' => 'Погода', 'callback_data' => '/lang_english');
$keyboard = array('keyboard' => array(array($button_1, $button_2), array($button_3)));
$chatid = $update['message']['chat']['id'];
$recievms = $update['message']['text'];


