<?php

const TOKEN = '1188039782:AAHeIj5nGHpp2HHSv7L0vn4tT6azRgbrCBY';
const BASEURL = 'https://api.telegram.org/bot' . TOKEN . '/';
include 'simple_html_dom.php';

$html = file_get_html('https://www.gismeteo.ua/weather-dnipro-5077/');
$temp = $html->find('span[class=unit unit_temperature_c]');
$b = 'Погода';
$temperatura = trim($temp[0]->plaintext);
$button_1 = array('text' => 'Перейти в главное меню', 'callback_data' => '/lang_english');
$button_2 = array('text' => 'Перейти в другое меню', 'callback_data' => '/lang_russian');
$button_3 = array('text' => 'Погода', 'callback_data' => '/lang_english');
$keyboard = array('keyboard' => array(array($button_1, $button_2), array($button_3)));
$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);
$chatid = $update['message']['chat']['id'];
$recievms = $update['message']['text'];

function sendrequest($method, $params = [])
{
    if (!empty($params)) {
        $url = BASEURL . $method . '?' . http_build_query($params);
    } else {
        $url = BASEURL . $method;
    }
    return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
}

if ($recievms == '/start') {
    sendrequest('sendmessage', ['chat_id' => $chatid, 'text' => 'Приветствую вас!']);
} elseif ($recievms == 'Погода')
{
 //   sendrequest('sendmessage', ['chat_id' => $chatid, 'text' => 'Сейчас в Днепре '.$temperatura.'°C', 'reply_markup' => json_encode($keyboard, TRUE)]);
    sendrequest('sendmessage', ['chat_id' => $chatid, 'text' => 'XYZ' , 'reply_markup' => json_encode($keyboard, TRUE)]);
    
}




