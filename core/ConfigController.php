<?php
namespace Core;

class ConfigController extends Config{
    private string $url;
    private string $urlController;
    private array $urlArray;

    public function __construct(){

        $this->config();

        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->urlArray = explode("/", $this->url);
            if(isset($this->urlArray[0])){
                $this->urlController = $this->urlArray[0];
            }else{
                $this->urlController = "Mapa";
            }
        }else{
            $this->urlController = "Mapa";
        }
        //echo $this->urlController;
    }

    public function pageLoad(){
        $controller = "\\Sts\Controllers\\".$this->urlController;
        $controllers = new $controller();
        $controllers->index();
    }
}