<?php
/**
 * 桥接模式，代码模板
 * 意图:将抽象部分与实现部分分离，使它们都可以独立地变化。
 *
 * Date: 1/5/14
 * Time: 14:02
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 实现部分，具体实现方式A
 * Class ConcreteImplementorA
 */
class ConcreteImplementorA implements Implementor
{
    public function operation()
    {
        echo 'ComcreteImplementorA Operation Method.' . "\n";
    }
}