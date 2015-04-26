<?php
namespace libs\SpajtFramework;
class View {
    private static $vars = array(); // the [] operator is not supported by this hosting;
    private static $currentViewFile = '';
    public static function set($key, $value) {
        self::$vars[$key] = $value;
    }
    
}
