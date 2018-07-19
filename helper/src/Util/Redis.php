<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/7/19
 * Time: 16:38
 */
namespace Util;

class Redis
{
    public function __construct($name = 'name')
    {
        echo $name;
    }

    public function display($text = ''){
        echo $text;
    }
}