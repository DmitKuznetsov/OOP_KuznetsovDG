<?php

// Интерфейс DataSource
interface DataSource {
    public function readData(): string;
}

// Источник данных из файла
class FileDataSource implements DataSource {
    private $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function readData(): string {
        if (!file_exists($this->filePath)) {
            throw new Exception('Файл не найден');
        }
        return file_get_contents($this->filePath);
    }
}

// Источник данных из базы данных (эмуляция)
class DatabaseDataSource {
    private $connectionString;

    public function __construct(string $connectionString) {
        $this->connectionString = $connectionString;
    }

    public function fetchData(): string {
        return "Получены данные из базы данных с соединением {$this->connectionString}";
    }
}

// Адаптер для интеграции DatabaseDataSource в интерфейс DataSource
class DatabaseAdapter implements DataSource {
    private $dbSource;

    public function __construct(DatabaseDataSource $dbSource) {
        $this->dbSource = $dbSource;
    }

    public function readData(): string {
        return $this->dbSource->fetchData();
    }
}
