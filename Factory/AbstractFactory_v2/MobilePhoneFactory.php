<?php
 /**
 * Created by PhpStorm.
 * Date: 1/4/14
 * Time: 17:45
 * Author: zengdewu <dewuzeng@amwares.com>
 * Copyright: (C) 2013, AMware System Technologies Ltd., Co.
 */

class MobilePhoneFactory 
{
    public static function createHardware()
    {
        $phone = Reader::getPhoneConfig();
        $className = ucfirst(strtolower($phone)) . 'Hardware';
        $reflection = new ReflectionClass($className);
        return $reflection->newInstance();
    }

    public static function createSoftware()
    {
        $phone = Reader::getPhoneConfig();
        $className = ucfirst(strtolower($phone)) . 'Software';
        $reflection = new ReflectionClass($className);
        return $reflection->newInstance();
    }
} 