<?php

required_once 'perkalian.php'

$perkalian = new perkalian;
$perkalian->set_perkalian(345,31);
echo"perkalian = ".$perkalian->get_perkalian();
echo"<br/>"
?>