<?php
/**
 * 职责链模式，代码模板
 * 将一个请求封装为一个对象，从而使用你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。
 *
 * Date: 1/5/14
 * Time: 22:44
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 定义一个处理请求的接口
 * Class Handler
 */
Abstract class Handler
{
    protected $handler = null;

    public function setSuccessor(Handler $handler)
    {
        $this->handler = $handler;
    }

    public abstract function handleRequest($request);
} 