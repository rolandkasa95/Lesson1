<?php

/**
 * Class Session
 */
class Session
{
    public $session;

    /**
     * @param array|null $data
     */
    public function save(array $data = null){
        foreach($data as $key=>$value){
            $this->session[$key] = $value;
        }
    }

    public function start(){
        session_start();
        $this->session = $_SESSION;
    }

    /**
     * @param null $key
     * @return bool
     */
    public function get($key = null){
        if(!$this->session && !$key){
            return false;
        }else{
            return $this->session[$key];
        }
    }

    public function destroy(){
        session_destroy($this->session);
    }
}