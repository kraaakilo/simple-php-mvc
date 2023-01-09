<?php
require("../vendor/autoload.php");

const VIEW_PATH = "../src/views/";

try {
    function router(): string
    {
        $path = array_key_exists("PATH_INFO", $_SERVER) ? $_SERVER["PATH_INFO"] : "/";
        return match ($path) {
            "/" => "home.php",
            "/contact" => "contact.php",
            default => "404.php",
        };
    }
    require(VIEW_PATH . router());
} catch (Exception $e) {
    echo "404";
}