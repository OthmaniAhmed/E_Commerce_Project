<?php

include "../model/ArticleManager.php" ;

function show(){
$obj= new Article_manager() ;
$final_tab=$obj->find_all_articles();
$article=$final_tab->fetchAll(PDO::FETCH_NUM);
foreach($article as $valuer){
    echo" <tr>";
    foreach($valuer as $index=>$indexvaluer){
        if($index==0){
            $v=$indexvaluer ;
        }
        if($index==4 || $index==5 ){
            continue ;
        }
        echo "<td>$indexvaluer</td>" ;

    }
    
        
    echo "<td>
    <a href='../controller/delete_articles.php?etat=$v'><input type='button' value='delete'></a>
    <a href='../admin/update_article.html.php?etat=$v'><input type='button' value='Update'></a>
    </td>

    </tr>" ;
    
}
}

?>
