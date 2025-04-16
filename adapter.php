<?php

// Старый класс с устаревшим API
class OldClass {
    public function oldMethod() {
        return 'Это старый метод';
    }
}

// Новый класс с обновленным API
class NewClass {
    public function newMethod() {
        return 'Это новый метод';
    }
}

class AdapterMethod extends OldClass {
    private $newObject;
    
    public function __construct(NewClass $newObj) {
        $this->newObject = $newObj;
    }
    
    public function oldMethod() {
        return $this->newObject->newMethod();
    }
}

$newInstance = new NewClass();     // Создаем экземпляр нового класса
$adapter = new AdapterMethod($newInstance);   // Создаем адаптер

echo $adapter->oldMethod();       // Теперь вызывает новый метод, используя старый интерфейс
