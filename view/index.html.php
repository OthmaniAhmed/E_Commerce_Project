
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

 
<div class="jumbotron">
  <h1 class="display-3">Bienvenue dans notre boutique!</h1>
  <p class="lead">N°1 en Tunisie, PCs Gamers , accessoires et composants, les prix les moins chers</p>
  <hr class="my-4">
  <img src="../resources/images/about-img.jpg" class="center">
  <p class="lead">
  </p>
</div>
<form method="post">
<h1 class="textcenter">Nos produits</h1>
<div class="container pt-4">
<div class="row">
    <div class="col"><?php 
include "../controller/Print3articles.html.php" ;
affich(19) ;
?></div>
    <div class="col">
    <?php 

affich(9) ;
?>
</div>

    <div class="col">
    <?php 
affich(17) ;
?>

</div>
</div>
<div class="row">
    <div class="col"><?php 

affich(25) ;
?></div>
    <div class="col">
    <?php 

affich(5) ;
?>
</div>

    <div class="col">
    <?php 
affich(6) ;
?>

</div>
</div>
</form>
<div class="text-center">
  <a href="article_page.html.php?etat=0"> <button type="button" class="btn btn-primary btn-lg"> Voir plus</button></a>
</div>
<?php
include "../model/cart.php" ;
if(isset($_GET['etat'])) { 
  
  $a=$_GET['etat'] ;
  $r= new cart_manager();
  $res=$r->add_to_cart($a) ;
}
?>

</body>
</html>