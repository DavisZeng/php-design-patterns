<?php
/**
 *访问者模式，代码模板
 * 模式意图 ：表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变各元素的类的前提下定义作用于这些元素的新操作。
 *
 * Date: 1/4/14
 * Time: 22:01
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 具体的A 访问者
 * Class AVisitor
 */
class AVisitor implements Visitor
{

    public function visitElementA(AElement $aElement)
    {
        echo get_class($aElement) . " 被 " . get_class($this) . " 访问.\n";
    }

    public function visitElementB(BElement $bElement)
    {
        echo get_class($bElement) . " 被 " . get_class($this) . " 访问.\n";
    }
}