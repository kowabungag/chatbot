<?php
include 'simple_html_dom.php';
include 'var.php';
include 'pars_update.php';
include_once 'phunction.php';




if ($recievms == '/start') {
    sendrequest('sendmessage', ['chat_id' => $chatid, 'text' => 'Приветствую вас!' , 'reply_markup' => json_encode($keyboard, TRUE)]);
} elseif ($recievms == 'Погода')
{
 sendrequest('sendmessage', ['chat_id' => $chatid, 'text' => 'Сейчас в Днепре '.$temperatura.'°C']);
}




