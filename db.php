<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('sqlite:' . dirname(__FILE__) . '/db.sqlite');
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->pdo->exec('CREATE TABLE IF NOT EXISTS message (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name VARCHAR(50) NOT NULL, 
                email VARCHAR(50) NOT NULL,
                number VARCHAR(50) NOT NULL,
                message TEXT NOT NULL
            )');
        } catch (PDOException $exception) {
            var_dump($exception);
            die();
        }
    }

    public function executeQuery($query)
    {
        return $this->pdo->query($query);
    }

    public function prepareStatement($query)
    {
        return $this->pdo->prepare($query);
    }

    public function getMessages($lastDisplayedMessageIndex)
    {
        try {
            $query = "SELECT * FROM message WHERE id > :lastDisplayedMessageIndex";
            $statement = $this->prepareStatement($query);
            $statement->bindParam(':lastDisplayedMessageIndex', $lastDisplayedMessageIndex, PDO::PARAM_INT);
            $statement->execute();
            $messages = $statement->fetchAll();

            return $messages;
        } catch (PDOException $exception) {
            var_dump($exception);
            return false;
        }
    }
}
?>