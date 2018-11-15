<?php
namespace Application;

class Main
{
    /** @var null|self $instance Экземпляр приложения */
    protected static $instance;

    /**
     * @return Main
     */
    public static function getInstance(): self
    {
        if (!isset(static::$instance)) {
            static::$instance = (new static())->init();
        }

        return static::$instance;
    }

    protected function init(): self
    {
        return $this;
    }
}