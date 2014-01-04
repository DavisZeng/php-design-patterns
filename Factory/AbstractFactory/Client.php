<?php
/**
 * 抽象工厂模式，代码模板
 * 模式意图 ：提供一个创建一系列想着或相互依赖对象的接口，而无需指定它们具体的类。
 *
 * Date: 1/4/14
 * Time: 17:09
 * Author: zengdewu <dewuzeng@gmail.com>
 */
require_once("MobilePhoneFactory.php");
require_once("IphoneFactory.php");
require_once("AndroidFactory.php");
require_once("Hardware.php");
require_once("Software.php");
require_once("IphoneHardware.php");
require_once("AndroidHardware.php");
require_once("IphoneSoftware.php");
require_once("AndroidSoftware.php");

class Client 
{
    public static function main()
    {
        echo "---------------Iphone Factory-------------------\n";
        $iphoneFactory = new IphoneFactory();

        $iphoneHardware = $iphoneFactory->createHardware();
        $iphoneHardware->developHardware();

        $iphoneSoftware = $iphoneFactory->createSoftware();
        $iphoneSoftware->developSoftware();

        echo "---------------Android Factory-------------------\n";

        $androidFactory = new AndroidFactory();

        $androidHardware = $androidFactory->createHardware();
        $androidHardware->developHardware();

        $androidSoftware = $androidFactory->createSoftware();
        $androidSoftware->developSoftware();
    }
}
Client::main();