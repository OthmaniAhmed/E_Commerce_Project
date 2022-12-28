<?php 
session_start() ;
if(isset($_SESSION['adr']) ){

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <form action="" method="POST">
		<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">Admin</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
				<a href="add_article.html.php"><span class="fa fa-briefcase mr-3"></span>Ajouter un article</a>
	          </li>
	          <li>
              <a href="add_gamme.html.php"><span class="fa fa-briefcase mr-3"></span>Ajouter une catégorie</a>
			  </li>
			  <li>
				<a href="edit_articles.html.php"><span class="fa fa-briefcase mr-3"></span>Manage article</a>
				</li>
	          <li>
			  <li>
				<a href="edit_gamme.html.php"><span class="fa fa-briefcase mr-3"></span>manage category</a>
				</li>
	          <li>
              <a href="feedback.html.php"><span class="fa fa-paper-plane mr-3"></span>Feedback</a>
			  </li>
			  <li>
            <a href="..\view\deconnexion.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          	  </li>
	        </ul>

	      </div>
    	</nav>

        <!-- c'est le contenu de la page, "sidebar" je l'ai pris de "colorlib.com" -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Ajoute Categories </h2>
                <table id="example" class="table table-striped table-bordered" style="width:100%">

        <tbody>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="name" placeholder="Le nom de catégories" size="25" required> </td> 
            </tr>
        </tbody>
         
        </table>
        <input type="submit" value="Add" name="submit">
       
      </div>
    </div>
  </form>
  <?php

        if(isset($_POST['submit'])){
        
             require_once "../model/GammeManager.php" ;

                $name=$_POST['name'];

                    $a= new gamme_manager() ;

                     $a->add_gamme($name);

         }
                        

      ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php 
}
else { 
  header("location:../view/admin_login.html.php") ;
    
}
?>