<?php
namespace Sts\Controllers;
class Maps{
    private string $name;
    private array|string $data;

    public function index(){
        $get = new \Sts\Models\Database();
        $this->data['adress'] = $get->getAdress();
        //var_dump($this->data);

        //$this->data=0;
        $configMaps = new \Core\ConfigView("sts/Views/maps/maps",$this->data);
        $configMaps->include();
    }

}