<?php
namespace model;
class Data {
    private static $log = '';
    function __construct($table) {
        self::$log = require_once('./resources/config.php');
        $log = self::$log;
        $this->connection = new mysqli($log['dbHost'], $log['dbUser'], $log['dbPass'], $log['dbBase']);
        $this->table = $table;
    }
    public function getAll() {
        $question = "SELECT * FROM ".$this->table;
        $stmt = $this->connection->prepare($question);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
        }
    public function getWhere($where) {
        $question = "SELECT * FROM ".$this->table." WHERE ".$where;
        $stmt = $this->connection->prepare($question);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

}

