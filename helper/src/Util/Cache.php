<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/7/19
 * Time: 16:38
 */
namespace Util;

class Cache
{
    public function __construct($name)
    {
        echo $name;
    }

    public function display($text){
        echo $text;
    }
}