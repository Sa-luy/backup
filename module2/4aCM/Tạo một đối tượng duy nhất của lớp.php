<?php


class Application
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}

$saluy1 = Application::getInstance();
$saluy2 = Application::getInstance();
// $saluy3 = new Application();