<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 19/11/2016
 * Time: 15:41
 */

namespace com\bitshammer\repoTeamplate\util;


class Properties
{

    private static $prop = null;


    public static function getInstance()
    {
        if (empty(self::$prop)){

            self::$prop = parse_ini_file('config/config.ini');
        }
        return self::$prop;
    }
}
