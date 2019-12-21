<?php

class Animal {

    public $name = "";
    public $speed = "";

    public function __construct($name){
        $this->name = $name;

        echo "my name is".$name."<br/>";
    }

    public function warmup2(){
        $this->speed = rand(0,10);
    }
}
?>