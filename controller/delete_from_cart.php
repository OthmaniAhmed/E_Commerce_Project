<?php

include "../model/cart.php" ;



if(isset($_GET['etat'])){
$obj= new cart_manager() ;
$ref=$_GET['etat'];
$obj->delete($ref);
header("location:../view/cart.html.php") ;
}

?>