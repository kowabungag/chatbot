<?php

$html = file_get_html('https://www.gismeteo.ua/weather-dnipro-5077/');
$temp = $html->find('span[class=unit unit_temperature_c]');
$temperatura = trim($temp[0]->plaintext);