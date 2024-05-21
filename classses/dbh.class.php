<?php
//SQL Database Connection Class
class Dbh
{
    private $host = 'localhost';
    private $dbUser = "root";
    private $dbPassword = "Golempekkawizard69";
    private $dbName = "PHPandMySQL";

    protected function connection()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->dbUser, $this->dbPassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}