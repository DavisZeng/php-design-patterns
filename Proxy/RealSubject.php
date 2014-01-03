<?php
/**
 * 代理模式，代码模板
 * 模式意图 ：为其他对象提供一种代理以控制对这个对象的访问。
 *
 * Date: 1/3/14
 * Time: 22:35
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * Class RealSubject 真实主题角色
 */
class RealSubject extends Subject
{
    public function __construct()
    {
    }

    public function action()
    {
        echo "Action method in RealSubject.\r\n";
    }
} 