<?php

class animal
{
    public $name;
    public $legs = 4;
    public $cold_blooded = "No";

    public function __construct($string)
    {
        $this -> name = $string;
    }
}

?>  