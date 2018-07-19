<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/7/19
 * Time: 16:29
 */
namespace songchechina;

class CacheTool
{

    function __construct($name = '')
    {
        echo $name;
    }

    public function set($key, $value){
        echo $key . '###' . $value;
    }

    public function get($key){
        echo $key;
    }
}