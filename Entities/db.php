<?php

final class db
{
    private $dsn = 'mysql:dbname=turtuledb;host=localhost;charset=utf8';
    private $username = 'root';
    private $passwd = '';
    private $options = [];
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO($this->dsn, $this->username, $this->passwd, $this->options);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    public function beginTransaction() {
        $this->connection->beginTransaction();
    }

    public function query($sql, array $data = null)
    {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
        return $stmt;
    }

    public function commit() {
        $this->connection->commit();
    }

    public function lastInsertId() {
        return $this->connection->lastInsertId();
    }

    public function rollBack() {
        $this->connection->rollBack();
    }
}
