<?php

class fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "ini buah " . $this->name . " dan saya berwarna " . $this->color . "<br>";
    }
}

class Strawberry extends fruit
{
    public function message()
    {
        echo "Saya buah berry ";
    }
}

$strawberry = new Strawberry("Strawberry", "Merah");
$strawberry->message();
$strawberry->intro();
