<?php
/**
 * Gets all tasks
 * @param $pdo pdo connection
 * @return array|object
 */
function getAllTasks($pdo) {
    $query = $pdo->prepare("SELECT * FROM tasks");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Task');
}

/**
 * Connets to mysql database
 * @return PDO
 */
function connectDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=tasks', 'root', '');
    } catch (PDOException $error) {
        echo "Can't connect to database. Error: " . $error->getMessage();
    }
    return;
}

/**
 * Dumps the data on the screen
 * @param $data
 */
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}