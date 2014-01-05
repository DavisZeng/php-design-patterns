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
 * 终结符表达式，实现与文法中的终结符相关联的解释操作。
 * Class TerminalExpression
 */
class TerminalExpression implements AbstractExpression
{

    public function interpreter(Context $context)
    {
        echo "终端解释器。\n";
    }
}