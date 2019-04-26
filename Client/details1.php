<?php
     
    require '../admin/database.php';
 
    $nameError = $emailError = $telError= $name = $email = $tel ="";

    if(!empty($_POST)) 
    {
        $name               = checkInput($_POST['orangeForm-name']);
        $email        = checkInput($_POST['orangeForm-email']);
        $tel              = checkInput($_POST['orangeForm-tel']); 
        $isSuccess          = true;
        $isUploadSuccess    = false;
        
        if(empty($name)) 
        {
            $nameError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($email)) 
        {
            $emailError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        if(empty($tel)) 
        {
            $telError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
       
        
        if($isSuccess) 
        {
            $db = Database::connect();
            $statement = $db->prepare("INSERT INTO client (name, email, tel) VALUES(?, ?, ?)");
            $statement->execute(array($name,$email,$tel));
            Database::disconnect();
            header("Location:plan.html");
        }
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-client_id" content="261858296049-59bnqd53t25qimvoi0asfaoettgk7q5m.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
			<!-- Bootstrap core CSS -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
			<!-- Material Design Bootstrap -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/owl.theme.default.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/fixed.css">
    <title>Document</title>
</head>
<body>
        <div id="acceuil">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                    <a href="#" class="navbar-brand"><span id="lo">H</span>OME<span id="lo">C</span>I</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#roule">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="roule">
                        <ul class="navbar-nav ml-auto">
                           <li class="nav-item">
                               <a href="index.html" class="nav-link">ACCEUIL</a>
                           </li>
                           <li class="nav-item">
                               <a href="index.html" class="nav-link">SERVICES</a>
                           </li>
                           <li class="nav-item">
                               <a href="ndex.html" class="nav-link">PLANS</a>
                           </li>
                           <li class="nav-item">
                               <a href="index.html" class="nav-link">TEMOINGNAGES</a>
                           </li>
                           
                        </ul>
                    </div>
                </nav>
               <div class="container-fluid">
                   <div class="separate" style="height: 100px;">

                   </div>
                   <div class="container-fluid" >
                      <a href="plan.html"> >>Page precedente</a>
                   </div>
                   <div class="row" style="border-bottom:1px solid black">
                       <div class="col-md-8">
                           <h1>Fosse Septique</h1>
                         
                       </div>
                       <div class="col-md-4">
                            <h2>prix de la realisation: 60000fr</h2>
                        
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-md-8">
                            <h2>Description</h2>
                            <p>la fosse setptique est un ouvrage utlise pour l'assainissement autonome et est destine a collecte les eaux usees d'une habitation. Elle oermet d'eviter le rejet des eaux usees et les cors d'eaux. La fosse assure l'epuration des eaux sales provenant ded la maison. Sa duree de vie est entre 15et 25 ans.</p>
                        </div>
                        <div class="col-md-4">
                             <h3>Details projet</h3>
                             <p>Elle est un moyen efficace de se conformer a la reglementationlorsque la maison n'est pas connecte a un reseau d'assinissement collectif.</p>
                             <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Formulaire-[g</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body mx-3">
                            <form class="form" action="details.php" role="form" method="POST" enctype="multipart/form-data">
                                <div class="md-form mb-5">
                                    
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" name="orangeForm-name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom</label>
                                </div>
                                <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="email" id="orangeForm-email" name="orangeForm-email" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                                </div>
        
                                <div class="md-form mb-4">
                                <i class="fas fa-phone prefix grey-text"></i>
                                <input type="tel" id="orangeForm-tel" name="orangeForm-tel" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">tel</label>
                                </div>
                                <hr>
                                <div class="g-signin2 text-center" data-onsuccess="onSignIn" data-theme="dark"></div>
                               
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-warning">Connecter</button>
                            </div>
                            </form>
                    </div>
                </div>
                </div>

                <div class="text-center">
                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">J'achete</a>
                </div>
                                        
            </div>
            </div>
        </div>

          
		<div class="offset">
                <footer>
                    <div class="row justify-content-center">
                        <div class="col-md-5 text-center">
                            <h1 style="font-size:1.1rem; "><span id="lo">H</span>OME<span id="lo">C</span>I</h1>
                            <p>Vous souhaitez partager avec nos futurs clients votre expérience ? Vous désirez en savoir plus sur nos diverses prestations et nos tarifs ? Rien de plus simple, joignez HOMECI :</p>
                            <strong>Contact Info</strong>
                            <p>+225 03585414<br>homece@gmail.com</p>
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <hr class="socket">
                        &copy; HOMECI.2019
                    </div>
                </footer>
            </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/js/mdb.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script>
                function onSignIn(googleUser) {
                  // Useful data for your client-side scripts:
                  var profile = googleUser.getBasicProfile();
                  console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                  console.log('Full Name: ' + profile.getName());
                  console.log('Given Name: ' + profile.getGivenName());
                  console.log('Family Name: ' + profile.getFamilyName());
                  console.log("Image URL: " + profile.getImageUrl());
                  console.log("Email: " + profile.getEmail());
          
                  // The ID token you need to pass to your backend:
                  var id_token = googleUser.getAuthResponse().id_token;
                  console.log("ID Token: " + id_token);
                }
              </script>

		
</body>
</html>