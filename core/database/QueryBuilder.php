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
        return $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "App\business\models\\".$into_class);
    }

    public function queryColumn($table_name, $into_class, $column, $value)
    {
        $statement = $this->pdo->prepare("select * from {$table_name} WHERE {$column}=\"{$value}\"");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "App\business\models\\".$into_class);
    }

    public function insertInto($table_name, $columns, $values){

        $statement = $this->pdo->prepare("INSERT INTO {$table_name} (".implode(',', $columns) . ') VALUES ("'.implode('","', $values) . '")');
        $statement->execute();
        return;
    }

    public function updateColumn($table_name, $id, $column, $value){

        $statement = $this->pdo->prepare("UPDATE {$table_name} SET {$column}=\"{$value}\" WHERE id={$id}");
        $statement->execute();
        return;
    }

    public function deleteRow($table_name, $id){
        $statement = $this->pdo->prepare("DELETE FROM {$table_name} WHERE id={$id}");
        $statement->execute();
        return;
    }
}
