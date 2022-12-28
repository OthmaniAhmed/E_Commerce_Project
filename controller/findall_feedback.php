<?php

include "../model/feedback.php" ;

function show_tab_feedback(){
    $obj= new feedback_manager() ;
    $final_tab=$obj->findAll();
    
    foreach($final_tab as $valuer){
        echo" <tr>";
        foreach($valuer as $indexvaluer){
           
            echo "<td>$indexvaluer</td>" ;
    
        }
        
            
        echo " </tr>" ; 
    }
    
}
