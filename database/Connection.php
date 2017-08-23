<?php 

class Connection
{
    public static function make()
    {
        $servername = getenv('IP');
        $username = 'root';
        $password = "";
        $database = "mytodo";
        $dbport = 3306;
        try {
            return new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}