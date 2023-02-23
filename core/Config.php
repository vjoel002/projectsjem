<?php
namespace Core;
abstract class Config{
    public function config(){
        define('URL','http://localhost/maps/');

        define('DB','mysql');
        define('HOST','localhost');
        define('USER','root');
        define('PASS','Store@150993');
        define('DBNAME','maps');
    }
}