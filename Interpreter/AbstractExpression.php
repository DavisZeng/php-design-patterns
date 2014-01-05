<?php
/**
 *解释器模式，代码模板
 * 模式意图 ：给定一个语言，定义它的文法的一种表示，并定义一个解释器，这个 解释器使用该表示来解释语言中的句子。
 *
 * Date: 1/5/14
 * Time: 22:01
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 抽象表达式，声明一个抽象 的解释操作，这个 接口为抽象 语法树中所有的节点所共享。
 * Interface AbstractExpression
 */
interface AbstractExpression
{
    public function interpreter(Context $context);
} 