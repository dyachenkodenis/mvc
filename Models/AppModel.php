<?php 


class AppModel
{
    private $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    
    public function __construct()
    {
        
    }
    
    public function text()
    {
        return $this->text;
    }
}