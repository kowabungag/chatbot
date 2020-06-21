<?php
function sendrequest($method, $params = [])
{
    if (!empty($params)) {
        $url = BASEURL . $method . '?' . http_build_query($params);
    } else {
        $url = BASEURL . $method;
    }
    return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
}
