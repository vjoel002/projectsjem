<?php
namespace Sts\Controllers;
class Mapa1{
    private string $name;
    private array|string $data;

    public function index(){
        $completeAdress = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($completeAdress['smgSend'])){
            var_dump($completeAdress);
        }

        $this->data = 0;
        $mapa01 = new \Core\ConfigView("sts/Views/mapa1/mapa1",$this->data);
        $mapa01->include();
    }
}