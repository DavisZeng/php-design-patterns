<?php
/**
 * 抽象工厂模式，代码模板
 * 模式意图 ：提供一个创建一系列想着或相互依赖对象的接口，而无需指定它们具体的类。
 *
 * Date: 1/4/14
 * Time: 17:09
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 抽象工厂接口
 * Interface MobilePhoneFactory
 */
interface MobilePhoneFactory
{
    public function createHardware();

    public function createSoftware();
} 