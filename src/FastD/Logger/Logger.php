<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/28
 * Time: 下午8:39
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace FastD\Logger;

use Monolog\Handler\StreamHandler;

/**
 * Class Logger
 *
 * @package FastD\Logger
 */
class Logger
{
    /**
     * @param string $log
     * @param int   $level
     * @return \Monolog\Logger
     */
    public function createLogger($log, $level = \Monolog\Logger::INFO)
    {
        if (!is_dir(dirname($log))) {
            mkdir(dirname($log), 0755, true);
        }

        $logger = new \Monolog\Logger(pathinfo($log, PATHINFO_FILENAME));

        $logger->pushHandler(new StreamHandler($log, $level));

        return $logger;
    }
}