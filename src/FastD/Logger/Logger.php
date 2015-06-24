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
     * @var \Monolog\Logger
     */
    private $monolog;

    /**
     * @param     $log
     * @param int $level
     */
    public function __construct($log, $level = \Monolog\Logger::INFO)
    {
        $this->monolog = new \Monolog\Logger(pathinfo($log, PATHINFO_FILENAME));

        $this->monolog->pushHandler(new StreamHandler($log, $level));
    }

    /**
     * @param string $log
     * @param int   $level
     * @return static
     */
    public static function createLogger($log, $level = \Monolog\Logger::INFO)
    {
        return new static($log, $level);
    }

    /**
     * @param       $message
     * @param array $context
     * @return bool
     */
    public function info($message, array $context = [])
    {
        return $this->monolog->addInfo($message, $context);
    }

    /**
     * @param       $message
     * @param array $context
     * @return bool
     */
    public function error($message, array $context = [])
    {
        return $this->monolog->addError($message, $context);
    }

    /**
     * @param       $message
     * @param array $context
     * @return bool
     */
    public function notice($message, array $context = array())
    {
        return $this->monolog->addNotice($message, $context);
    }
}