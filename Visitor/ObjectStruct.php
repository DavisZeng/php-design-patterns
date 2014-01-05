<?php
/**
 *访问者模式，代码模板
 * 模式意图 ：表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变各元素的类的前提下定义作用于这些元素的新操作。
 *
 * Date: 1/4/14
 * Time: 22:01
 * Author: zengdewu <dewuzeng@gmail.com>
 */
class ObjectStruct 
{
    private $_elements = array();

    public function attach(Element $element)
    {
        $this->_elements[] = $element;
    }

    public function detach(Element $element)
    {
        $key = array_search($element, $this->_elements, true);
        if (false !== $key) {
            unset($this->_elements[$key]);
        }
    }

    public function accept(Visitor $visitor)
    {
        foreach ($this->_elements as $element) {
            $element->accept($visitor);
        }
    }
} 