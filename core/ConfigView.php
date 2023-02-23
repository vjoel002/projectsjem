<?php
namespace Core;

class ConfigView{

    public function __construct(private string $name, private array|string|null $data){}

    public function include(){
        if(file_exists('app/'.$this->name.'.php')){
            include 'app/sts/Views/nucleoViews/header.php';
            include 'app/'.$this->name.'.php';
            include 'app/sts/Views/nucleoViews/footer.php';
        }
    }
}