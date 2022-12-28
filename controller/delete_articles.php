<?php

include "../model/ArticleManager.php" ;



if(isset($_GET['etat'])){
$obj= new Article_manager() ;
$ref=$_GET['etat'];
$obj->delete($ref);
}

?>