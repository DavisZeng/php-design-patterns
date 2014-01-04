<?php
 /**
 * Created by PhpStorm.
 * Date: 1/4/14
 * Time: 18:39
 * Author: zengdewu <dewuzeng@amwares.com>
 * Copyright: (C) 2013, AMware System Technologies Ltd., Co.
 */

class Reader 
{
    const CONFIG_FILE_PATH = 'config.json';

    public static function config()
    {
        $content = file_get_contents(self::CONFIG_FILE_PATH);
        return json_decode($content, true);
    }

    public static function getPhoneConfig()
    {
        $configArray = self::config();
        return isset($configArray['AppConfig']['phone']) ? $configArray['AppConfig']['phone'] : null;
    }
} 