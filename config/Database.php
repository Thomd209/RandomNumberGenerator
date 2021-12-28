<?php
declare(strict_types=1);

class Database
{
    private static object $instance;
    private string $dsn = 'mysql:dbname=rundom_number;host=127.0.0.1';
    private string $user = 'root';
    private string $pass = 'redFish99';
    private array $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    private function __construct(){}

    public static function getInstance(): object
    {
        if (! isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function getConn(): object
    {
        return new PDO($this->dsn, $this->user, $this->pass, $this->options);
    }
}