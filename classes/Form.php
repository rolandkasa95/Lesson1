<?php

class Form
{
    const NAME = 'StdForm';
    protected  $elements;
    public  $name = 'Login';
    public $valid = false;
    public $id;
    
    public function getStartTag($attributes = null){
        if (!$attributes) return '<form>';
        $tag = "<form ";
        foreach ($attributes as $key => $value){
            $tag .= " $key =\"value\" ";
        }
        $tag .=">";
        return $tag;
    }

    public function getEndTag(){
        return "</form>";
    }

    public function setName($name = null){
        $this->name=$name;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function set($proprety, $value){
        $this->$proprety=$value;
    }

    public function setFormAttributes($attributes){
        foreach ($attributes as $key => $value){
            $this->$key = $value;
        }
    }

    public function setId($id){
        $this->id=$id;
        return $this;
    }

    public function getId(){
        return $this->id;
    }
}
