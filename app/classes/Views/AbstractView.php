<?php
namespace Application\Views;


abstract class AbstractView implements ViewInterface
{
    /** @var \stdClass|null $data */
    protected $data;

    public function __construct()
    {

    }

    public function setData(\stdClass $data)
    {
        // TODO: Implement setData() method.
    }

    public function render()
    {
        $data = $this->getData();
        $templateFilePath = $this->getTemplateFilePath();

        $templateScope = new class {

        };
        ob_start();
        require $this->getTemplateFilePath();
    }

    protected function getData()
    {
        return $this->data;
    }
}