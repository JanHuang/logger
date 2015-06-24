<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/6/24
 * Time: 下午5:30
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace FastD\Logger\Tests;

use FastD\Logger\Logger;

date_default_timezone_set('Asia/Shanghai');

class LoggerWriteTest extends \PHPUnit_Framework_TestCase
{
    public function testWrite()
    {
        $logger = Logger::createLogger(__DIR__ . '/test1.log');

//        $this->assertTrue($logger->info('demo', ['_GET' => ['name' => 'janhuang'], '_POST' => ['age' => 1]]));
    }
}