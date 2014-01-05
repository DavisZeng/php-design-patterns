<?php
/**
 * 享元模式，代码模板
 * 意图:运用共享技术有效的支持大量细粒度的对象，享元模式变化的是对象的存储开销。
 *
 * Date: 1/5/14
 * Time: 11:47
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Flyweight.php");
require_once("FlyweightFactory.php");
require_once("ConcreteFlyweight.php");
require_once("UnsharedConcreteFlyweight.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $flyweightFactory = new FlyweightFactory();
        $flyweight = $flyweightFactory->getFlyweight('[IntrinsicState A]');
        $flyweight->operation('[ExtrinsicState A]');

        $flyweight = $flyweightFactory->getFlyweight('[IntrinsicState B]');
        $flyweight->operation('[ExtrinsicState B]');

        //不共享的对象，单独调用
        $uFlyweight = new UnsharedConcreteFlyweight('[Unshared IntrinsicState C]');
        $uFlyweight->operation('[Unshared ExtrinsicState C]');
    }
}
Client::main();