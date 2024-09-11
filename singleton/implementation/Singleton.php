<?php
trait Singleton
{
    private static $instance = null;

    // Private constructor to prevent direct object creation
    private function __construct() 
    {
    }

    // Static method to get the single instance of the class
    public static function getInstance()
    {
        if (self::$instance === null) { // Use comparison, not assignment
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __wakeup() {}
}
