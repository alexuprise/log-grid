<?php
namespace Application;

class Main
{
    /** @var null|self $instance Экземпляр приложения */
    protected static $instance;

    public static function getInstance(): self
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Точка входа в приложение
     *
     * @param string $route Маршрут обработки запроса
     * @throws Exception\ConfigNotFoundException
     */
    public function run(string $route = 'index')
    {
        echo Config::get('foo');
    }
}