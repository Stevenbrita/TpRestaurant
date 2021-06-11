<?php

class Reservation {

    private $_id;
    private $_dated;
    private $_hour;
    private $_user;
    private $_resto;
   

    
    public function __construct(){

    }

    public function setDated($dated){
        $this->_dated= $dated;
    }

    public function getDated(){
        return $this->_dated;
    }

    public function setHour($hour){
        $this->_hour= $hour;
    }

    public function getHour(){
        return $this->_hour;
    }
    public function setUser($user){
        $this->_user= $user;
    }

    public function getUser(){
        return $this->_user;
    }
    public function setResto($resto){
        $this->_resto= $resto;
    }o

    public function getResto(){
        return $this->_resto;
    }
    

    }
