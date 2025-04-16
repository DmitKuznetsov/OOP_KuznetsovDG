<?php

class GameSettings {
    // Приватный статический экземпляр класса
    private static $_instance = null;

    // Приватный конструктор предотвращает прямое создание объекта извне
    private function __construct() {}

    /**
     * Получить единственный экземпляр класса
     *
     * @return GameSettings
     */
    public static function getInstance() {
        if (is_null(static::$_instance)) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }

    // Свойства и методы для хранения, обработки игровых настроек
    private $volume = 50; // Громкость звука
    private $difficulty = 'normal'; // Уровень сложности

    // Геттеры и сеттеры для настройки значений
    public function getVolume() {
        return $this->volume;
    }

    public function setVolume(int $value) {
        $this->volume = max(min($value, 100), 0); // Ограничивает значение громкости диапазоном от 0 до 100
    }

    public function getDifficulty() {
        return $this->difficulty;
    }

    public function setDifficulty(string $level) {
        $allowedLevels = ['easy', 'normal', 'hard'];
        if (in_array(strtolower($level), $allowedLevels)) {
            $this->difficulty = strtolower($level);
        }
    }
}

