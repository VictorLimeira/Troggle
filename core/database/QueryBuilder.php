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
        return $statement->fetchAll(PDO::FETCH_CLASS, $into_class);
    }

    public function addTask($table_name, $description)
    {
        try{
            $completed = 0;

            $statement = $this->pdo->prepare("INSERT INTO {$table_name} (description, completed) values (:description, :completed)");
            $statement->bindParam(':description', $description);
            $statement->bindParam(':completed', $completed);
            $statement->execute();

        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
