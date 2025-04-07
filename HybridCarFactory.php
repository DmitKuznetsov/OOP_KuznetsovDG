<?php
class HybridCarFactory implements CarFactory {
    public function produceCar(): Car {
        return new HybridCar();
    }
}
?>
