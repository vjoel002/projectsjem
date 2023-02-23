<?php
namespace Sts\Models;
class Database extends Conn{
    private object $conn;
    public array $transmetor;

    public function sendAdress(){
        $receptor = $this->transmetor;
        //var_dump($receptor);

        $this->conn = $this->connection();
        $query_send = "INSERT INTO test_maps (start, end, created) VALUE (:start, :end, NOW())";
        $querySend = $this->conn->prepare($query_send);
        $querySend->bindParam(':start', $receptor['start']);
        $querySend->bindParam(':end', $receptor['end']);

        $querySend->execute();
        return $querySend;
    }

    public function getAdress(){
        $this->conn = $this->connection();
        $query_get = "SELECT id, start, end, created FROM test_maps LIMIT 1";
        $queryGet = $this->conn->prepare($query_get);

        $queryGet->execute();
        $result = $queryGet->fetchAll();
        return $result;
    }
}