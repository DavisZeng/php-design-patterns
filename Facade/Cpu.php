<?php
/**
 * 外观模式，代码模板
 * 模式意图 ：为了系统中的一组接口提供一个一致的界面，此模式定义了一个高层接口，这个 接口使得这一子系统更加容易使用。
 *
 * Date: 1/4/14
 * Time: 13:18
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * CPU 子系统类
 * Class Cpu
 */
class Cpu 
{
    public function cpuModel()
    {
        return "CPU: Inter Core i5.\n";
    }
} 