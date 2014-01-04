<?php
/**
 * 简单工厂模式，代码模板
 * 模式意图 ：定义一个用于创建对象的接口。
 *
 * Date: 1/4/14
 * Time: 15:12
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 具体产品类--乘法类
 * Class MulOperation
 */
class MulOperation extends Operation
{
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
} 