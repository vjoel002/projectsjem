<?php
namespace Sts\Controllers;

class ResultMapa{
    private string $name;
    private array|string $data;

    public function index(){
        

        $this->data=0;
        $resultMapa = new \Core\ConfigView("sts/Views/resultMapa/resultMapa",$this->data);
        $resultMapa->include();
    }
}