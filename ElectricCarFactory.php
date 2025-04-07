<?php
class ElectricCarFactory implements CarFactory {
    public function produceCar(): Car {
        return new ElectricCar();
    }
}
?>
