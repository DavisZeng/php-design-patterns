<?php
/**
 * 代理模式，代码模板
 * 模式意图 ：为其他对象提供一种代理以控制对这个对象的访问。
 *
 * Date: 1/3/14
 * Time: 22:35
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Subject.php");
require_once("RealSubject.php");
require_once("ProxySubject.php");

class Client 
{
    public static function main()
    {
        $subject = new ProxySubject();
        $subject->action();
    }
}

Client::main();