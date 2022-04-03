<?php

// Class
class Hewan
{
    //Property
    public static $kaki;
    public static $mata;

    // Method
    public static function lari()
    {
        echo "Aku seekor kucing..";
    }
}

// Object
$kucing = new Hewan();

$kucing->kaki = 4;
$kucing->mata = 2;

echo "kaki kucing mempunyai : $kucing->kaki";
echo "<br>";
echo "mata kucing memiliki : $kucing->mata";
echo "<br>";
