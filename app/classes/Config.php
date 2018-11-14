<?php
namespace Application;

use Application\Exception\ConfigNotFoundException;

/**
 * Класс, отвечающий за доступ к глобальным настройкам приложения
 * @package Application
 */
class Config
{
    /** @var string CONFIG_PATH Относительное расположение файла настроек */
    const CONFIG_PATH = __DIR__ . '../config.json';

    /** @var null|array $config Объект с настройками */
    protected static $config;

    /**
     * Метод, отдающий значение некоторой настройки сервера
     * @param string $key Код нужного значения
     * @return mixed Искомое значение настройки
     * @throws ConfigNotFoundException
     */
    public static function get(string $key)
    {
        if (!is_array(static::$config)) {
            static::loadConfig();
        }

        return static::$config[$key];
    }

    /**
     * Метод, загружающий настройки из файла
     */
    protected static function loadConfig()
    {
        if (!file_exists(static::CONFIG_PATH)) {
            throw new ConfigNotFoundException;
        }

        static::$config = json_decode(static::CONFIG_PATH, true);
    }
}