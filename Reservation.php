<?php

class Reservation {

    private $_id;
    private $_dated;
    private $_hour;
    private $_id_user;
    private $_id_resto;
   

    
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
    public function setId_user($id_user){
        $this->_id_user= $id_user;
    }

    public function getId_user(){
        return $this->_id_user;
    }
    public function setId_resto($id_resto){
        $this->_id_resto= $id_resto;
    }

    public function getId_resto(){
        return $this->_id_resto;
    }
    

    }


    public function envoisDonnees($dsn,$user,$password){

        try{
            $dbh = new PDO($dsn,$user,$password);
        }catch(PDOException $e){
            echo 'cheh';
        }
        $sth= $dbh->prepare("INSERT INTO `Reservation`(`dated`, `hour`, `id_user`, `id_resto`) 
        VALUES(:dated, :hour, :id_user, :id_resto,);");

        $sth->bindParam(':dated', $this->getDated());
        $sth->bindParam(':hour', $this->getHour());
        $sth->bindParam(':id_user', $this->getId_user());
        $sth->bindParam(':id_resto', $this->getId_resto());
        

        $sth->execute();
    }

    public function recupDonnees($dsn,$user,$password){

        try{
            $dbh= new PDO($dsn,$user,$password);
    
        $sth = $dbh->prepare("SELECT * FROM `Reservation`");
        
        $sth->execute();
        $count = $sth->rowCount();
         
        $result = $sth->fetchAll();
    
        echo var_dump($result);
        }catch(PDOException $e){
            $e->getMessage();
        }
    
        if($count > 0   && !empty($result)){
    
            return $result;
            
    
        }else{
            header("Location: connexion.php");
        }

    }


