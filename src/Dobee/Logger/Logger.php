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

namespace Dobee\Logger;

use Monolog\Handler\StreamHandler;

/**
 * Class Logger
 *
 * @package Dobee\Logger
 */
class Logger
{
    /**
     * @var array
     */
    private $config = [
        'save.name' => 'logger',
        'save.path' => '',
    ];

    /**
     * @param array $config
     * @param int   $level
     * @return \Monolog\Logger
     */
    public function createLogger(array $config = [], $level = \Monolog\Logger::INFO)
    {
        $config = array_merge($this->config, $config);

        $logger = new \Monolog\Logger($config['save.name'] . '.log');

        $logger->pushHandler(new StreamHandler($config['save.path'] . DIRECTORY_SEPARATOR . $config['save.name'], $level));

        return $logger;
    }
}