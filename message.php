<?php

class Message
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getAllMessages()
    {
        return $this->database->executeQuery('SELECT * FROM message')->fetchAll();
    }

    public function insertionMessage($name, $email, $number, $message)
    {
        try {
            if (strlen($name) > 255 || strlen($email) > 255 || strlen($number) > 255 || strlen($message) > 255) {
                throw new Exception("La longueur maximale des champs est de 255 caractères.");
            }
            // Adding '+' to the phone number
            $number = '+' . $number;

            $statement = $this->database->prepareStatement('INSERT INTO message (name, email, number, message) VALUES (:name, :email, :number, :message)');
            $statement->bindValue(':name', $name, PDO::PARAM_STR);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->bindValue(':number', $number, PDO::PARAM_STR);
            $statement->bindValue(':message', $message, PDO::PARAM_STR);
            $statement->execute();
        } catch (PDOException $exception) {
            var_dump($exception);
            die();
        }
    }
}
?>