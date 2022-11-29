<?php
class Database
{

    public static function connect($config, $username = 'root',  $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        try {
            return new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die('Could not connect' . $e->getMessage());
        }
    }
}
