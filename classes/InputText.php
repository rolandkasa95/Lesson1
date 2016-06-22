<?php

class InputText
{
    public $type = 'text';
    public $label;
    public $value;
    public $required;

    public function setLabel($label){
        $this->label = ucfirst($label);

    }

    public function  setValue($vale){
        $this->value = $vale;

    }

    public function setType($type){
        $this->type = $type;
    }

    public function setRequired(){
        $this->required = 'required';
    }

    public function getInput(){
        return  "<input type=\"$this->type\" name=\"$this->label\" required=\"$this->required\"";

    }
}