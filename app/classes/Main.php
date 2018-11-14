<?php
/**
 * Created by PhpStorm.
 * User: alex_uprise
 * Date: 14.11.18
 * Time: 17:03
 */

namespace Application;


class Main
{
    /** @var null|self $instance */
    protected static $instance;

    public static function getInstance(): self
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }
    }

    /**
     * @param string $route Маршрут обработки запроса
     */
    public function run(string $route = 'index')
    {
        echo 'foo';
    }
}