<?php

namespace App\Models;

class Man extends User
{

    private string $bio;

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    public function setBio(string $bio): void
    {
        $this->bio = "I'm a man and my bio is :" . $bio;
    }

}