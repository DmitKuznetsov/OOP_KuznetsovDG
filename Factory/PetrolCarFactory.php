<?php
class PetrolCarFactory implements CarFactory {
    public function produceCar(): Car {
        return new PetrolCar();
    }
}
?>
