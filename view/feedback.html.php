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
<form method="post">
<div class="container pt-4">
     
        <div class="form-group">
        <label class="col-form-label col-form-label-lg" for="inputLarge">Email</label>
        <input class="form-control form-control-lg" type="email" placeholder="Votre email s'il vous plaît" id="inputLarge" name="email" require>
        </div>

      <div class="form-group">
      <label for="exampleTextarea">Vos Feedback</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="feedback"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
</div>
</form>
<?php
include "../model/feedback.php" ;
if(isset($_POST['submit'])) { 
    $a= $_POST['email'];
    $b=$_POST['feedback'] ;

    $r= new feedback_manager();

    $res=$r->add_feedback($a,$b) ;

}


?>


</body>
</html>