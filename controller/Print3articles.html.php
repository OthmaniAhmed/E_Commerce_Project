<?php

include "../model/ArticleManager.php" ;
function affich($ref){

  $obj= new Article_manager() ;
$final_tab=$obj->find_articles($ref);
$article=$final_tab->fetchAll(PDO::FETCH_NUM);
foreach($article as $valuer){
  $ref = $valuer[0];
    $name = $valuer[1];
    $prix = $valuer[3] ;
    $photo = $valuer [5] ;  }
    echo "
    <div class='card border-secondary mb-3' style='max-width: 20rem;'>
    <div class='card-header'>$name</div>
    <div class='card-body'>
      <h4 class='card-title'>$prix DT</h4>
      <img src='../resources/images/$photo'  width='200' height='200'>
      <a href='index.html.php?etat=$ref'><input type='button' value='Ajouter au Panier' name='button' > </a>
    </div>
  </div>" ;

  
}










?>
