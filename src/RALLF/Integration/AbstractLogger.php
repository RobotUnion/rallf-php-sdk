<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 11/16/17
 * Time: 7:42 PM
 */

namespace RALLF\Integration;

class AbstractLogger implements Logger {

    /**
     * @param string $message
     * @param mixed $data
     * @param int $severity , standard RFC3164 code (https://tools.ietf.org/html/rfc3164)
     * @param string $channel
     */
    abstract function log($message, $data = null, $severity = Logger::SEVERITY_DEBUG, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function debug($message, $data = null, $channel = "")
    {
        $this->log($message, $data, Logger::SEVERITY_DEBUG, $channel);
    }

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function warning($message, $data = null, $channel = "")
    {
        $this->log($message, $data, Logger::SEVERITY_WARNING, $channel);
    }

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function alert($message, $data = null, $channel = "")
    {
        $this->log($message, $data, Logger::SEVERITY_ALERT, $channel);
    }

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function emergency($message, $data = null, $channel = "")
    {
        $this->log($message, $data, Logger::SEVERITY_EMERGENCY, $channel);
    }

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function critical($message, $data = null, $channel = "")
    {
        $this->log($message, $data, Logger::SEVERITY_CRITICAL, $channel);
    }

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function error($message, $data = null, $channel = "")
    {
        $this->log($message, $data, Logger::SEVERITY_ERROR, $channel);
    }

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function info($message, $data = null, $channel = "")
    {
        $this->log($message, $data, Logger::SEVERITY_INFO, $channel);
    }
}