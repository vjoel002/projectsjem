<?php
namespace Sts\Models;
use PDO;

abstract class Conn{
    private string $db = DB;
    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbname = DBNAME;
    private object $connect;

    protected function connection(){
        try{
            $this->connect = new PDO($this->db.':host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pass);
            return $this->connect;
        }catch(PDOException $err){
            return false;
        }
    }
}