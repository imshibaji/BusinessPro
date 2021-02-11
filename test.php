<?php

class MyApp{
    public $name='MyApp';
    public $version="1.0.0";

    public function info(){
        return 'App Name:'.$this->name.', Version:'.$this->version;
    }
}

$ma = new MyApp();

echo json_encode($ma->info());

