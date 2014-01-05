<?php
/**
 *解释器模式，代码模板
 * 模式意图 ：给定一个语言，定义它的文法的一种表示，并定义一个解释器，这个 解释器使用该表示来解释语言中的句子。
 *
 * Date: 1/5/14
 * Time: 22:01
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("AbstractExpression.php");
require_once("TerminalExpression.php");
require_once("NonterminalExpression.php");
require_once("Context.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $context = new Context();

        $expressions = array();

        $expressions[] = new TerminalExpression();
        $expressions[] = new NonterminalExpression();
        $expressions[] = new TerminalExpression();

        foreach ($expressions as $expression) {
            $expression->interpreter($context);
        }

    }
}
Client::main();