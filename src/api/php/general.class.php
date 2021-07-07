<?php
class General {
    public static function output($string) {
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }
    public static function date($date = null) {
        $format = 'Y-m-d';
        return $date ? date($format, $date) : date($format, time());
    }
    public static function datetime($date = null) {
        $format = 'Y-m-d H:i:s';
        return $date ? date($format, $date) : date($format, time());
    }
}
?>
