<?php
/**
 *访问者模式，代码模板
 * 模式意图 ：表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变各元素的类的前提下定义作用于这些元素的新操作。
 *
 * Date: 1/4/14
 * Time: 22:01
 * Author: zengdewu <dewuzeng@gmail.com>
 */
require_once("Visitor.php");
require_once("AVisitor.php");
require_once("BVisitor.php");
require_once("CVisitor.php");
require_once("Element.php");
require_once("AElement.php");
require_once("BElement.php");
require_once("ObjectStruct.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $objectStruct = new ObjectStruct();
        $objectStruct->attach(new AElement());
        $objectStruct->attach(new BElement());

        $objectStruct->accept(new AVisitor());
        $objectStruct->accept(new BVisitor());
        $objectStruct->accept(new CVisitor());
    }
}
Client::main();