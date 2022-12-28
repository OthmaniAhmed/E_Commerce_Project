<?php

include "../model/ArticleManager.php" ;


function show_all(){
    $obj= new Article_manager() ;
    $final_tab=$obj->find_all_articles();
    $article=$final_tab->fetchAll(PDO::FETCH_NUM);
    $len=count($article)-1 ;
    echo "<div class='row'>" ;
    for ($i = 0; $i <= $len; $i++) {
        if(($i % 3) == 0 && $i != 0){
          $a = $article[$i] ;
         
           echo "</div>" ;
           echo "<div class='row'>" ;
                $name = $a[1];
                $prix = $a[3] ;
                $photo = $a [5] ; 
                $ref =$a[0] ;
                $gamme = $a[6] ;
                echo "
                <div class='col'>
                <div class='card border-secondary mb-3' style='max-width: 20rem;'>
                <div class='card-header'>$name</div>
                <div class='card-body'>
                  <h4 class='card-title'>$prix DT</h4>
                  <img src='../resources/images/$photo'  width='200' height='200'>
                  <a href='article_page.html.php?etat=0&art=$ref'> <input type='button' value='Ajouter au Panier'></a>
                </div>
              </div></div>" ;
              
        }
        else {
            $a = $article[$i] ;
        
        $name = $a[1];
                $prix = $a[3] ;
                $photo = $a [5] ;
                $ref =$a[0] ;
                $gamme = $a[6] ;
            echo "
            <div class='col'>
            <div class='card border-secondary mb-3' style='max-width: 20rem;'>
            <div class='card-header'>$name</div>
            <div class='card-body'>
              <h4 class='card-title'>$prix DT</h4>
              <img src='../resources/images/$photo'  width='200' height='200'>
              <a href='article_page.html.php?etat=0&art=$ref'> <input type='button' value='Ajouter au Panier'></a>
            </div>
          </div></div>" ;
        
       } 
    }
  
}
function show_article_with_gamme($id){
    $obj= new Article_manager() ;
    $final_tab=$obj->find_articles_with_gamme($id);
    $article=$final_tab->fetchAll(PDO::FETCH_NUM);
    $len=count($article)-1 ;
    echo "<div class='row'>" ;
    for ($i = 0; $i <= $len; $i++) {
        if(($i % 3) == 0 && $i != 0){
          $a = $article[$i] ;
         
           echo "</div>" ;
           echo "<div class='row'>" ;
           $ref =$a[0] ;
                $name = $a[1];
                $prix = $a[3] ;
                $photo = $a [5] ; 
                $gamme = $a[6] ;
                echo "
                <div class='col'>
                <div class='card border-secondary mb-3' style='max-width: 20rem;'>
                <div class='card-header'>$name</div>
                <div class='card-body'>
                  <h4 class='card-title'>$prix DT</h4>
                  <img src='../resources/images/$photo'  width='200' height='200'>
                  <a href='article_page.html.php?etat=$gamme&art=$ref'> <input type='button' value='Ajouter au Panier'></a>
                </div>
              </div></div>" ;
              
        }
        else {
            $a = $article[$i] ;
        $ref =$a[0] ;
        $name = $a[1];
                $prix = $a[3] ;
                $photo = $a [5] ;
                $gamme = $a[6] ;
            echo "
            <div class='col'>
            <div class='card border-secondary mb-3' style='max-width: 20rem;'>
            <div class='card-header'>$name</div>
            <div class='card-body'>
              <h4 class='card-title'>$prix DT</h4>
              <img src='../resources/images/$photo'  width='200' height='200'>
              <a href='article_page.html.php?etat=$gamme&art=$ref'> <input type='button' value='Ajouter au Panier'> </a>
            </div>
          </div></div>" ;
        
       } 
    }


}




?>