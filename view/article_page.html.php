<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="..\resources\css\bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyStore</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.html.php">MyStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="article_page.html.php?etat=0">Nos Produits 
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.html.php">FeedBack</a>
      </li>
     
      
     
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <a href="cart.html.php"><img src="..\resources\images\cart1.png" alt=""></a>
      <p>//////</p>
      <a href="admin_login.html.php"> <button class="btn btn-secondary my-2 my-sm-0" type="submit">Login</button></a>
    </div>
  </div>
</nav>


<div class="container pt-4">
    <div class="form-group">
    <select class="custom-select" onchange="take_me(this.value)" >
      <option selected="" value="article_page.html.php?etat=0">Nos Categories</option>
       <?php
       include "../controller/findalll_gamme.php" ;
       show_gammes() ;
       ?>
       <option value='article_page.html.php?etat=0'>Tous les articles</option>
    </select>
  </div>
<?php
     if(isset($_GET['etat'])){
        if($_GET['etat']==0){
            include "../controller/affichage_article.html.php" ;
            show_all() ;
           
        }
        else{
            include "../controller/affichage_article.html.php" ;
            show_article_with_gamme($_GET['etat']) ;
        }   
     }
     if(isset($_GET['art'])) { 
      include "../model/cart.php" ;
      $a=$_GET['art'] ;
      $r= new cart_manager();
      $res=$r->add_to_cart($a) ;
    }




?>


</div>



  
  

    <script>
        function take_me(src){
            window.location=src ;
        }
    </script>
    


</body>
</html>