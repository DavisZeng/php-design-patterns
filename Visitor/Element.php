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
 * 元素类抽象接口
 * Interface Element
 */
interface Element
{
    /**
     * 接受访问者的访问
     * @param Visitor $visitor
     * @return mixed
     */
    public function accept(Visitor $visitor);
}