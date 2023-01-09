<?php

namespace App\Models;

interface Rider
{
    public function ride();
    public function stop();
    public function speeder();
}