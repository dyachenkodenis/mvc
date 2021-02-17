<?php 


class AppView
{
    private $model;
    private $controller;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;

        echo "<h1>Home Page</h1>";
    }

    public function index()
    {
        return $this->controller->welcome();
    }

}