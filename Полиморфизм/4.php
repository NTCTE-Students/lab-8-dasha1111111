<?php
interface Database {
    public function connect();
    public function query($sql);
}
class MySQLDatabase implements Database {
    public function connect() {
        echo "Подключение к базе данных MySQL.<br>";
    }

    public function query($sql) {
        echo "Запрос MySQL: {$sql}<br>";
    }
}
class PostgreSQLDatabase implements Database {
    public function connect() {
        echo "Подключение к базе данных PostgreSQL.<br>";
    }

    public function query($sql) {
        echo "Запрос PostgreSQL: {$sql}<br>";
    }
}
class SQLiteDatabase implements Database {
    public function connect() {
        echo "Подключение к базе данных SQLite.<br>";
    }

    public function query($sql) {
        echo "Запрос SQLite: {$sql}<br>";
    }
}
// Тестирование
$mySQLDb = new MySQLDatabase();
$postgreSQLDb = new PostgreSQLDatabase();
$sqliteDb = new SQLiteDatabase();

$mySQLDb->connect();
$mySQLDb->query("SELECT * FROM users");

$postgreSQLDb->connect();
$postgreSQLDb->query("SELECT * FROM orders");

$sqliteDb->connect();
$sqliteDb->query("SELECT * FROM products");
?>