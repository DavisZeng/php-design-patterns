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
 * 访问者接口
 * Interface Visitor
 */
interface Visitor
{
    /**
     * 访问A元素，相当于给A 元素添加访问者功能
     * @param AElement $aElement
     * @return mixed
     */
    public function visitElementA(AElement $aElement);

    /**
     * 访问B元素，相当于给B元素添加访问者功能
     * @param BElement $bElement
     * @return mixed
     */
    public function visitElementB(BElement $bElement);
} 