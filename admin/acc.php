



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
			<!-- Bootstrap core CSS -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
			<!-- Material Design Bootstrap -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
			<link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>
<body>
 <div class="container" style="background:#ccc;">
 <div><H1 class="mb-4" style="text-align:center;">Administrateur</H1></div>
	 <div class="row" style="border-top:1px solid black;">
		 
		 <div class="col-md-3" style="background:purple; color:white; height:550px;">
		   <div class="header mt-2">
				 <h3>Dashboard</h3>
				 <hr style="border: 1px solid white;">
			 </div>
			 <br>
		   <ul style="list-style:none;">
				   <div class="mt-4 mb-4">
					   <li><a class="mb-3" href="index.php" style="color:white;font-size:1.5em;">Panneau</a></li>
				   
           </div>
           <br>
				   <div class=" mb-4">
					   <li><a class="" href="plan.php"style="color:white;font-size:1.5em;">Plan</a></li>
				
           </div>
           <br>
				   <div class=" mb-4">
					   <li>
					   <a class="" href="clients.php" style="color:white;font-size:1.5em;">Client</a>
					   </li>
				 
					 </div>
					 <br>
				   <div class=" mb-4">
					   <li>
					   <a href="index.php" style="color:white;font-size:1.5em;">Deconnection</a>
					   </li>
				 
				   </div>
				   
			   </ul>
		 </div>
		 <div class="col-md-9">
                  <div class="row">
					  <div class="col-md-12 mb-4">
					  <ul class="nav justify-content-center grey lighten-4 py-4">
							<li class="nav-item">
								<a class="nav-link" href="#!">Profil</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#!">Notification</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php">Deconnection</a>
							</li>
							
					  </ul>
					  </div>
				  </div>
				  <div class="row">
					  <div class="col-md-5 ml-2"  style="height:200px; width:200px; background:orange;border-radius: 20%;" >
							<a href=""><i class="fas fa-user" id="ls" style="margin-top:40px; margin-left:130px; font-size:60px; color:white;"></i></a>
							<h5 style="text-align: center; margin-top:60px; color:white; font-weight:700;"> <a href="clients.php" style="color:white;">Clients:</a>
						


							<?php
						   require 'database.php';
						   $db = Database::connect();
							 $nbr = $db->query("SELECT * FROM client");
							 $mb = $nbr->rowCount();
						   echo $mb;
						 
						 
						 ?>
						</h5>
						 
						  
					  </div>
					  <div class="col-md-5 ml-4" style="height:200px; width:200px; background:green;border-radius: 20%;">
						<i class="fas fa-bell"style="margin-top:40px; margin-left:130px; font-size:60px; color:white;"></i>
						<h5 style="text-align: center; margin-top:60px; color:white; font-weight:700;">Notification:</h5>
					   </div>
				  </div>
				 
		 </div>
	 </div>
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
</body>
</html>