<?php
include_once('config_const.php');

define("MODE",
    preg_match("#\b".preg_quote(PROD_SIGNATURE)."\b#i", $_SERVER['SERVER_NAME']) ?
        PROD :
        (preg_match("#\b".preg_quote(LOCAL_SIGNATURE)."\b#i", $_SERVER['SERVER_NAME']) ? LOCAL : DEV)
);

class Config {
    private static $config = [];

    public static function init() {
        if (!empty(Config::$config)) return;

        switch (MODE) {
            case DEV:
                Config::$config = require_once('development.php');
                break;
            case PROD:
                Config::$config = require_once('production.php');
                break;
            case LOCAL:
                Config::$config = require_once('local.php');
                break;
        }
    }

    public static function get($var) {
        if (isset(Config::$config[$var])) { return Config::$config[$var]; }
        return null;
    }
}

Config::init();

/**
 * @param $var
 * @return mixed|null
 */
function config($var) {
    return Config::get($var);
}
