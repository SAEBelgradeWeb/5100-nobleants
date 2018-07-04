<?php

/**
 * Class QueryBuilder - it makes queries to database
 */
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table, $model)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $model);
    }

    public function addNew($table, $payload)
    {
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(", ", array_keys($payload)),
            ":" . implode(", :", array_keys($payload))
            );
        $query = $this->pdo->prepare($sql);
        $query->execute($payload);
    }
}