<?php

class taco {
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function addMeat() {
        echo $this->var;
    }
}

$taco = new taco;

$taco->addMeat();

?>