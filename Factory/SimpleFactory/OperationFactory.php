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
 * 工厂类角色
 * Class OperationFactory
 */
class OperationFactory 
{
    const OPERATION_ADD = 0x01;
    const OPERATION_SUB = 0x02;
    const OPERATION_MUL = 0x03;

    public static function createOperation($type)
    {
        $operator = null;
        switch ($type) {
            case self::OPERATION_ADD:
                $operator = new AddOperation();
                break;
            case self::OPERATION_SUB:
                $operator = new SubOperation();
                break;
            case self::OPERATION_MUL:
                $operator = new MulOperation();
                break;
        }
        return $operator;
    }
} 