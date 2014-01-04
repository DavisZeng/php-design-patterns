<?php
/**
 * 单例模式，代码模板
 * 模式意图 ：保证一个类只有一个实例，并提供一个访问它的全局访问点。
 *
 * Date: 1/3/14
 * Time: 22:35
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 主题类
 * Class Subject
 */
class Subject 
{
    private static $_instance = null;

    private function __construct()
    {
    }

    public static function singleton()
    {
        if (null === self::$_instance) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
} 