<?php
namespace Sts\Controllers;
class Mapa{
    private string $name;
    private array|string $data;

    public function index(){
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($form['smgSend'])){
            /*$database = new \Sts\Models\Database();
            $database->transmetor = $form;
            $database->sendAdress();*/

            var_dump($form);


            /*$_SESSION['adress1'] = $form["start"];
            $_SESSION['adress2'] = $form["end"];
            $_SESSION['number1'] = $form["number1"];
            $_SESSION['number2'] = $form["number2"];*/
        }

        $this->data=0;
        $config = new \Core\ConfigView("sts/Views/mapa/mapa",$this->data);
        $config->include();
    }
}