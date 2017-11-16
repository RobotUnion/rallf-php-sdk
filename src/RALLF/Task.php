<?php

namespace RALLF\Integration;

use Facebook\WebDriver\Remote\RemoteWebDriver;

abstract class Task implements Runnable {

    private $driver;
    private $logger;
    private $robot;
    private $input;

    /**
     * Task constructor.
     * @param $driver
     * @param $logger
     * @param $robot
     * @param $input
     */
    public function __construct($driver, $logger, $robot, $input)
    {
        $this->driver = $driver;
        $this->logger = $logger;
        $this->robot = $robot;
        $this->input = $input;
    }

    /**
     * @return RemoteWebDriver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @return mixed
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @return mixed
     */
    public function getRobot()
    {
        return $this->robot;
    }

    /**
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

}