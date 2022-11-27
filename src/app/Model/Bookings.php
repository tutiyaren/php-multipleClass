<?php
namespace App\Model;
use PDO;

class Bookings
{
    private $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=mysql; dbname=bookingform; charset=utf8';
        $dbUser = 'root';
        $dbPassword = 'password';
        $this->pdo = new PDO($dsn, $dbUser, $dbPassword);
    }

    public function create($name, $email, $phone_number)
    {
        $sql =
            'INSERT INTO bookings (name, email, phone_number) VALUES (:name, :email, :phone_number)';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone_number', $phone_number);
        $statement->execute();
    }
}
