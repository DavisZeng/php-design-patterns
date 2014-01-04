<?php
/**
 * 观察者模式，代码模板
 * 模式意图 ：定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新。
 *
 * Date: 1/4/14
 * Time: 08:55
 * Author: zengdewu <dewuzeng@gmail.com>
 */
require_once("Newspaper.php");
require_once("Reader.php");

class Client 
{
    public static function main()
    {
        $newspaper = new Newspaper('Newyork Times');

        $allen = new Reader('Allen');
        $jim = new Reader('Jim');
        $linda = new Reader('Linda');

        //add reader
        $newspaper->attach($allen);
        $newspaper->attach($jim);
        $newspaper->attach($linda);

        //remove reader
        $newspaper->detach($linda);

        $newspaper->breakOutNews('USA break down!');

        //=====output======
        //Allen is reading breakout news USA break down! (Newyork Times)
        //Jim is reading breakout news USA break down! (Newyork Times)
    }
}

Client::main();