<?php
if(isset($this->data['adress'][0])){
    extract($this->data['adress'][0]);
    unset($this->data['adress'][0]);

    echo $start . "<br>";
echo $end;
}
