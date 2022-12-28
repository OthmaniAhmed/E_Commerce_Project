<?php

include "../model/GammeManager.php" ;

function show(){
$obj= new gamme_manager() ;
$final_tab=$obj->list_gamme();
echo "<select name='id_gamme' >" ;
foreach($final_tab as $valuer ){
 $gamme_id =  $valuer[0] ;    
 $gamme_name= $valuer[1] ;
    echo "<option value='$gamme_id'>$gamme_name</option>" ;
  }
echo "</select>" ;
}

function show_tab_gamme(){
$obj= new gamme_manager() ;
$final_tab=$obj->findAll();

foreach($final_tab as $valuer){
    echo" <tr>";
    foreach($valuer as $index=>$indexvaluer){
        if($index==0){
            $v=$indexvaluer ;
        }
        echo "<td>$indexvaluer</td>" ;

    }
    
        
    echo "<td>
    <a href='../controller/delete_gamme.php?etat=$v'><input type='button' value='delete'></a>
    <a href='../admin/update_gamme.html.php?etat=$v'><input type='button' value='Update'></a>
    </td>

    </tr>" ; 
}

}
function show_gammes(){
    $obj= new gamme_manager() ;
    $final_tab=$obj->list_gamme();
    foreach($final_tab as $valuer ){
        $gamme_id =  $valuer[0] ;    
        $gamme_name= $valuer[1] ;
           echo "<option value='article_page.html.php?etat=$gamme_id'>$gamme_name</option>" ;
         }
         
    
}


?>
