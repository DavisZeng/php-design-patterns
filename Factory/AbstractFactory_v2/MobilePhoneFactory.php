<?php
/**
 * 抽象工厂模式，代码模板
 * 模式意图 ：提供一个创建一系列想着或相互依赖对象的接口，而无需指定它们具体的类。
 *
 * Date: 1/4/14
 * Time: 17:09
 * Author: zengdewu <dewuzeng@gmail.com>
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