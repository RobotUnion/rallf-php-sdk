<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 12/3/16
 * Time: 6:42 PM
 */

namespace RALLF\Integration;

interface Logger {

    const SEVERITY_EMERGENCY = 0;
    const SEVERITY_ALERT = 1;
    const SEVERITY_CRITICAL = 2;
    const SEVERITY_ERROR = 3;
    const SEVERITY_WARNING = 4;
    const SEVERITY_NOTICE = 5;
    const SEVERITY_INFO = 6;
    const SEVERITY_DEBUG = 7;

    /**
     * @param string $message
     * @param mixed $data
     * @param int $severity , standard RFC3164 code (https://tools.ietf.org/html/rfc3164)
     * @param string $channel
     */
    function log($message, $data = null, $severity = 7, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function debug($message, $data = null, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function warning($message, $data = null, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function alert($message, $data = null, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function emergency($message, $data = null, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function critical($message, $data = null, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function error($message, $data = null, $channel = "");

    /**
     * @param $message
     * @param null $data
     * @param string $channel
     */
    function info($message, $data = null, $channel = "");
}