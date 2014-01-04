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
    public static $phone = 'iphone';

    public static function createHardware()
    {
        $hardware = null;
        switch (self::$phone) {
            case "iphone":
                $hardware = new IphoneHardware();
                break;
            case "android":
                $hardware = new AndroidHardware();
                break;
        }
        return $hardware;
    }

    public static function createSoftware()
    {
        $software = null;
        switch (self::$phone) {
            case "iphone":
                $software = new IphoneSoftware();
                break;
            case "android":
                $software = new AndroidSoftware();
                break;
        }
        return $software;
    }
} 