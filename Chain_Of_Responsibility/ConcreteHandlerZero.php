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
 * 具体处理者类，处理它所负责的请求，可访问它的后继者，如果可处理该请求，就处理之，否则就将请求转发给它的后继者。
 * Class ConcreteHandlerZero [处理0]
 */
class ConcreteHandlerZero extends Handler
{
    public function handleRequest($request)
    {
        if ($request === 0) {
            echo __CLASS__ . " 处理请求 " . $request . ".\n";
        } elseif (null !== $this->handler) {
            $this->handler->handleRequest($request);
        }
    }
} 