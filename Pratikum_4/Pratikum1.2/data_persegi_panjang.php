<?php
require_once "class_persegi_panjang.php";

$bangun = new PersegiPanjang(10, 5);
echo $bangun->getLuas();
echo "<br>";
echo $bangun->getKeliling();
