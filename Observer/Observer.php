<?php
/**
 * 观察者模式，代码模板
 * 模式意图 ：定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新。
 *
 * Date: 1/4/14
 * Time: 08:55
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 抽象观察者角色
 * Interface Observer
 */
interface Observer
{
    /**
     * 通知方法
     * @return mixed
     */
    public function update();
} 