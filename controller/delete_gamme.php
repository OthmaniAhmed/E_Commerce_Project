<?php

include "../model/GammeManager.php" ;



if(isset($_GET['etat'])){
$obj= new gamme_manager() ;
$ref=$_GET['etat'];
$obj->delete($ref);
}

?>