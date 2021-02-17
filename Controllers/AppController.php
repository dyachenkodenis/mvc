<?php 


class AppController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
    
    public function welcome()
    {
        return $this->model->text();
    }
}