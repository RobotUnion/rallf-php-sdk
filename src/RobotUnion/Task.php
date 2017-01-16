<?php

namespace RobotUnion\Integration;

abstract class Task implements Runnable {
    public $device;
    public $logger;
    public $robot;
}