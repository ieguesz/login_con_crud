<?php
# database.php
class Database{
    public static function Iniciar(){
        $pdo = new PDO('mysql:host=localhost:3306;dbname=ventas;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
