<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/7/18
 * Time: 15:38
 */
namespace common;

class RedisTool
{

    private static $redis = NULL;

    public static function instance($config = 'cache'){
        if ( ! static::$redis){
            static::$redis = \Redis_Db::forge($config);
        }
    }

    public static function get($key, $default_value = false){
        static::instance();

        $value = static::$redis->get($key);

        return $value ? $value : $default_value;
    }

    public static function set($key, $value, $expiration = false){
        static::instance();

        if ($expiration){
            $result = static::$redis->set($key, $value, 'EX', $expiration);
        } else {
            $result = static::$redis->set($key, $value);
        }

        return $result;
    }
}