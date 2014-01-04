<?php
/**
 * 单例模式，代码模板
 * 模式意图 ：保证一个类只有一个实例，并提供一个访问它的全局访问点。
 *
 * Date: 1/3/14
 * Time: 22:35
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Subject.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $objectA = Subject::singleton();
        $objectB = Subject::singleton();

        if ($objectA === $objectB) {
            echo "Singleton Instance.\n";
        } else {
            echo "Exception.\n";
        }
    }
}
Client::main();