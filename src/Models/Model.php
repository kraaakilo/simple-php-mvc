<?php
namespace App\Models;
use App\Database\DatabaseConnection;

class Model
{
    protected static string $table = "";

    public static function all(): array
    {
        $db = new DatabaseConnection("localhost", "eshop", "kratos", "kratos@123");
        $connection = $db->getConnection();
        $results = $connection->query("SELECT * FROM " . static::$table);
        return $results->fetchAll();

    }
}