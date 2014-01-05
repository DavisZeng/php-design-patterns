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
 * 非终结符表达式，为方法中的非终结符实现解释操作。
 * Class NonterminalExpression
 */
class NonterminalExpression implements AbstractExpression
{

    public function interpreter(Context $context)
    {
        echo "非终端解释器。\n";
    }
}