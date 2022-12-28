<?php
require_once "../connexion.php";



class cart_manager {


    function add_to_cart($ref){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
       
       
        $sql="insert into cart values('$ref')";
        $c->exec($sql);
    }

    function find_all_cart(){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();
        $sql="select * from cart";
        $res=$c->query($sql);
        
        return $res ;
   
    }
    function find_cart_with_id($id){
        $cnx = new connextion() ;
        $c=$cnx->getConnextion();

            $sql="select * from article where ref='$id'";
            $res=$c->query($sql);
            
            return $res ;
    
        }
        function delete($ref){
            $cnx = new connextion() ;
            $c=$cnx->getConnextion();
            $sql="delete from cart where article_id='$ref'";
           $c->exec($sql);
            
    
              
          }
    }
    

    






?>
   