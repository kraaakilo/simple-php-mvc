<?php

namespace App\Database;

use PDO;

class DatabaseConnection
{

    private string $database;

    /**
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }

    /**
     * @param mixed $database
     */
    public function setDatabase(string $database): void
    {
        $this->database = $database;
    }

    /**
     * @return PDO | null
     */
    public function getConnection(): PDO|null
    {
        try {
            return new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->getDatabase() . ";", $this->getUser(), $this->getPassword());

        } catch (\Exception $e) {
            dump("Error in database connection");
        }
        return null;
    }

    private string $hostname;
    private string $user;
    private string $password;

    /**
     * @return String
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @param String $hostname
     */
    public function setHostname(string $hostname): void
    {
        $this->hostname = $hostname;
    }

    /**
     * @return String
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param String $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return String
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param String $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function __construct(string $hostname, string $database, string $user, string $password,)
    {
        $this->hostname = $hostname;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
    }
}