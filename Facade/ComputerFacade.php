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
 * 外观类 [向外提供一致的接口]
 * Class ComputerFacade
 */
class ComputerFacade 
{
    private $_cpu = null;
    private $_hardDisk = null;
    private $_memory = null;

    public function __construct()
    {
        $this->_cpu = new Cpu();
        $this->_hardDisk = new HardDisk();
        $this->_memory = new Memory();
    }

    public function device()
    {
        return $this->_cpu->cpuModel() . $this->_memory->memoryModel() .$this->_hardDisk->hardDiskModel();
    }
} 