<?php

if(strpos($_SERVER['REQUEST_URI'], '/ru') === 0) {
    require __DIR__ . '/__langRu.php';
} else {
    require __DIR__ . '/__langCz.php';
}

class Url
{
    const LANG_RU = 'ru';
    const LANG_CZ = 'cz';

    static function to($url, $lang = null){
        if (!$lang) {
            global $lang;
        }

        $resultUrl = $url;

        if ($lang == self::LANG_RU) {
            $resultUrl = '/ru' . $resultUrl;
        }

        if (empty($resultUrl)) {
            $resultUrl = '/';
        } elseif($resultUrl == '/ru/') {
            $resultUrl = '/ru';
        }

        return $resultUrl;
    }

    static function getNameLang($lang)
    {
        $res = '';
        if ($lang == self::LANG_RU) {
            $res = 'РУ';
        } elseif ($lang == self::LANG_CZ) {
            $res = 'CZ';
        }

        return $res;
    }

    static function getUrl()
    {
        $uri = $_SERVER['REQUEST_URI'];

        $action = '';

        if (strpos($uri, 'about')) {
            $action = 'about';
        } elseif (strpos($uri, 'photo')) {

            $action = 'photo';
        } elseif (strpos($uri, 'contact')) {

            $action = 'contact';
        }

        return $action;
    }
}