<?php

// Общий интерфейс устройства
interface Device {
    public function turnOn();
    public function turnOff();
    public function setState($state);
}

// Абстрактный класс для телевизоров
abstract class AbstractTV implements Device {
    public function turnOn() {
        echo "ТВ включен.\n";
    }

    public function turnOff() {
        echo "ТВ выключен.\n";
    }

    abstract public function changeChannel($channel);

    public function setState($state) {
        $this->changeChannel($state);
    }
}

// Абстрактный класс для лампочек
abstract class AbstractLight implements Device {
    public function turnOn() {
        echo "Лампочка включена.\n";
    }

    public function turnOff() {
        echo "Лампочка выключена.\n";
    }

    abstract public function adjustBrightness($level);

    public function setState($state) {
        $this->adjustBrightness($state);
    }
}

// Конкретные реализации устройств для производителей

// Тв Sony
class SonyTV extends AbstractTV {
    public function changeChannel($channel) {
        echo "SONY: Переключился на канал '$channel'.\n";
    }
}

// Тв Samsung
class SamsungTV extends AbstractTV {
    public function changeChannel($channel) {
        echo "SAMSUNG: Переключился на канал '$channel'.\n";
    }
}

// Лампа Philips
class PhilipsLight extends AbstractLight {
    public function adjustBrightness($level) {
        echo "PHILIPS: Яркость установлена на $level%.\n";
    }
}

// Лампа IKEA
class IKEALight extends AbstractLight {
    public function adjustBrightness($level) {
        echo "IKEA: Яркость установлена на $level%.\n";
    }
}

// Пульт дистанционного управления
class RemoteControl {
    private $device;

    public function __construct(Device $device) {
        $this->device = $device;
    }

    public function turnOn() {
        $this->device->turnOn();
    }

    public function turnOff() {
        $this->device->turnOff();
    }

    public function setState($state) {
        $this->device->setState($state);
    }
}
