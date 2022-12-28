<?php


require_once "../connexion.php";

class gamme_manager {
  function findAll(){
      
    $obj = new connextion();
    $cnx=$obj->getConnextion() ;
   
    $sql="select * from gamme";
    $res=$cnx->query($sql);
    $g=$res->fetchAll(PDO::FETCH_NUM);
  return $g ;

  } 
  function find($ref){
    
    $obj = new connextion();
    $cnx=$obj->getConnextion() ;
   
    $sql="select * from gamme where reference='$ref'" ;
    $res=$this->cnx->query($sql);
    $g=$res->fetchAll(PDO::FETCH_NUM);
  return $g ;
    
  }

  function add_gamme($name){
    $cnx = new connextion() ;
    $c=$cnx->getConnextion();
    $id=null;
    $sql="insert into gamme values('$id','$name')";
    $c->exec($sql);
   
    
  }
  function list_gamme(){
    $m=new gamme_manager() ;
    $tab=$m->findAll("gamme") ;
    return $tab ;

  }
  function delete($ref){
    $cnx = new connextion() ;
  $c=$cnx->getConnextion();
  $sql="delete from gamme where id='$ref'";
  $c->exec($sql);
   header("location:../admin/edit_gamme.html.php") ;

    
      
  }
  function update($ref,$name){
    $cnx = new connextion() ;
    $c=$cnx->getConnextion();
    
  
    $sql="UPDATE `gamme` SET `nom` = '$name'  WHERE `gamme`.`id` = '$ref'" ;
    $c->exec($sql);
    header("location:../admin/edit_gamme.html.php") ;
    
  
}


}








?>