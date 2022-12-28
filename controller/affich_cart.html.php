<?php

include "../model/cart.php" ;



function show(){
        $obj= new cart_manager() ;
    $tab=$obj->find_all_cart();
    $article=$tab->fetchAll(PDO::FETCH_NUM);
   
    foreach($article as $value){
         $value[0] ;
    $x=$obj->find_cart_with_id($value[0]);
    $t=$x->fetchAll(PDO::FETCH_NUM) ;
        foreach($t as $art){
            $v=$value[0] ;
            $name=$art[1] ;
            $prix=$art[3] ;
            $des=$art[4] ;
            $qte=1 ;
            echo "<tr class='table-active'>
            <th scope='row'>$name</th>
            <td>$prix</td>
            <td>$qte</td>
            <td>$des</td>
            <td><a href='../controller/delete_from_cart.php?etat=$v'><input type='button' value='Cheak-out'></a></td>
          </tr>" ;
    
        }

        
    }

    }




?>
