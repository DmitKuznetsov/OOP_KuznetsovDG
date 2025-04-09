<?php
$electric_factory = new ElectricCarFactory();
$petrol_factory = new PetrolCarFactory();
$hybrid_factory = new HybridCarFactory();

$electric_car = $electric_factory->produceCar();
$petrol_car = $petrol_factory->produceCar();
$hybrid_car = $hybrid_factory->produceCar();

$electric_car->drive();  
$petrol_car->drive();    
$hybrid_car->drive();  
?>
