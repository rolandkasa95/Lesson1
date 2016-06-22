<?php

class Field
{
    public $type;
    public $name;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(){
        return $this->name;
    }

    public function getTag(){
        $html = "<input ";
        $html .= "type=\"$this->type\" ";
        $html .= "name=\"$this->name\" ";
        $html .= ">";
        return $html;
    }
}