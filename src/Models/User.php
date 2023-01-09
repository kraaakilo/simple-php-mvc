<?php

namespace App\Models;
use PDO;

class User extends Model implements Rider
{
    protected static string $table = "users";
    public function ride()
    {
        dump("J'ai une ".$this->car." --- Je conduis");
    }

    public function stop()
    {
        dump("J'ai une ".$this->car." --- Je stoppe");
    }

    public function speeder()
    {
        dump("J'ai une ".$this->car." --- Je file");
    }
    public function __invoke(): void
    {
        dump($this);
    }

    private string $name;

    private string $bio;

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->bio = "I'm a user and my bio is :".$bio;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) > 5) {
            $this->name = $name;
        }
    }

    public string $car;
    private float $balance;

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        if ($balance > 5000) {
            $this->balance += $balance;
        }
        if ($balance == 6000) {
            $this->balance += ($balance + $balance * 0.5);
        }
    }

    public function __construct(string $name, string $car, float $balance)
    {
        $this->setName($name);
        $this->car = $car;
        $this->balance = $balance;
    }
}