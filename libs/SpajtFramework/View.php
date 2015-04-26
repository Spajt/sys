<?php
class View {
    static $vars = array(); // the [] operator is not supported by this hosting;
    static $currentViewFile = '';
    public static function set($key, $value) {
        self::$vars[$key] = $value;
    }
    
}
