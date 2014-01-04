<?php
/**
 * 工厂方法模式，代码模板
 * 模式意图 ：定义一个用于创建对象的接口，让子类决定实例化哪一个类。Factory Method使用一个类的实例化延迟到其子类。
 *
 * Date: 1/4/14
 * Time: 15:25
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 抽象工厂类角色
 * Class OperationFactory
 */
interface OperationFactory
{
    public function createOperation();
} 