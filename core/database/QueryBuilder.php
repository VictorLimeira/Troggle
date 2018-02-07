<?php

/**
 * Build queries onto database
 */

class QueryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function queryAll($table_name, $into_class)
    {
        $statement = $this->pdo->prepare("select * from {$table_name}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, "App\business\models\\".$into_class);
    }

    public function queryColumn($table_name, $into_class, $column, $value)
    {
        $statement = $this->pdo->prepare("select * from {$table_name} WHERE {$column}=\"{$value}\"");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, "App\business\models\\".$into_class);
    }
}
