<?php
session_start() ;
if(isset( $_SESSION['adr'])){
  echo  "<h1><a href='deconnexion.php'>Déconnexion</a></h1>" ;
}
else{
if(isset($_GET['etat']))
{
    $etat=$_GET['etat'] ;
    switch ($etat) {
        case 1 :
            echo"<script> alert('vous devez authentifier avant !') </script> " ;
            
            break;
        case 2 :
            echo"<script> alert('Merci pour visite !') </script> " ;
            break;
        case 3 :
            echo" <script> alert ('login et/ou mot de passe sont incorrects :')</script> " ;
            break;            
        default:
            
            break;
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="admin_login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post"  >
  <h1 class="a11y-hidden">Login Form</h1>
  <div>
    <label class="label-email">
      <input type="text" class="text" name="name" placeholder="Email" tabindex="1" required />
      <span class="required">User Nom :</span>
    </label>
  </div>
  <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
  <label class="label-show-password" for="show-password">
    <span>Show Password</span>
  </label>
  <div>
    <label class="label-password">
      <input type="text" class="text" name="password" placeholder="Password" tabindex="2" required />
      <span class="required">Password</span>
    </label>
  </div>
  <input type="submit" value="Log In" name="submit"/>
  <div class="email">
    <a href="index.html.php">Page précédente</a>
  </div>
  <figure aria-hidden="true">
    <div class="person-body"></div>
    <div class="neck skin"></div>
    <div class="head skin">
      <div class="eyes"></div>
      <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="ears"></div>
    <div class="shirt-1"></div>
    <div class="shirt-2"></div>
  </figure>
</form>
<?php 
if(isset($_POST['submit'])){
    $adr=htmlspecialchars($_POST['name']) ;
    $mp=htmlspecialchars($_POST['password']);
    
    if($adr==="admin" && $mp==="admin"){
        $_SESSION['adr']=$adr ;
        $_SESSION['mp']=$mp ;
      
        header("location:..\admin\index.html.php") ;
    }
   
    else{
    header("location:admin_login.html.php?etat=3") ;
}
}

} 

 
?>

</body>
</html>