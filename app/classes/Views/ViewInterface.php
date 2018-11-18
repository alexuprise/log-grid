<?php
namespace Application\Views;


interface ViewInterface
{
    const CODE_INDEX = 'index';
    const CODE_API = 'api';

    public function setData(\stdClass $data);
    public function render();
}