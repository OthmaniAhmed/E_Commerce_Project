<?php
require_once "../connexion.php";



class feedback_manager {
   
    
    function add_feedback($EMAIL,$feedback){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        $ref=null;
       
        $sql="insert into feedback values('$EMAIL','$feedback')";
        $c->exec($sql);
    }

    function findAll(){
      
        $obj = new connextion();
        $cnx=$obj->getConnextion() ;
       
        $sql="select * from feedback";
        $res=$cnx->query($sql);
        $g=$res->fetchAll(PDO::FETCH_NUM);
      return $g ;
    
      } 
}
?>