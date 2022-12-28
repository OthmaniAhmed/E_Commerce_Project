<?php
class connextion{

    function getConnextion(){
        $dsn="mysql:host=localhost;dbname=database_article";
        $user="root";
        $pw="";
        $cnx=new PDO($dsn,$user,$pw);
        return $cnx ;
    }
}

?>