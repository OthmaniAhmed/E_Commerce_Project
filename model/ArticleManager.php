<?php
require_once "../connexion.php";



class Article_manager {
   
    
    function add_article($libelle,$quantite,$prix,$description,$image_path,$gamme_id){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        $ref=null;
       
        $sql="insert into article values('$ref','$libelle','$quantite','$prix','$description','$image_path','$gamme_id')";
        $c->exec($sql);
    }
    function find_all_articles(){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        $sql="select * from article";
        $res=$c->query($sql);
        
        return $res ;
   
    }
    function delete($ref){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        $sql="delete from article where ref='$ref'";
        $c->exec($sql);
        
      
    }

        

    function update($ref,$libelle,$quantite,$prix,$description,$image_path,$gamme_id){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        
      
        $sql="UPDATE `article` SET `libelle` = '$libelle', `quantite` = '$quantite', `prix` = '$prix', `description` = '$description', `image_path` = '$image_path' ,`gamme_id`='$gamme_id' WHERE `article`.`ref` = '$ref'" ;
        $c->exec($sql);
        
    }
    function find_articles($ref){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        $sql="select * from article where ref='$ref'";
        $res=$c->query($sql);
        
        return $res ;

    }
    function find_articles_with_gamme($id){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        $sql="select * from article where gamme_id='$id'";
        $res=$c->query($sql);
        
        return $res ;

    }


}



?>