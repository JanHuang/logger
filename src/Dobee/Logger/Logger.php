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

class Logger
{
    private $config;

    private $log;

    public function __construct(array $config)
    {
        $this->config = $config;

        $this->log = new \Monolog\Logger(isset($config['name']) ? $config['name'] : 'log.log');

        if (isset($config['path'])) {
            if (!is_dir($config['path'])) {
                mkdir($config['path'], 0755, true);
            }
        }

        $this->log->pushHandler(new StreamHandler($config['path'] . DIRECTORY_SEPARATOR . $config['name'], \Monolog\Logger::INFO));
    }

    public function save($content)
    {
        $this->log->addInfo($content);
    }
}