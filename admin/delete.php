<?php
    require 'database.php';
 
    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    if(!empty($_POST)) 
    {
        $id = checkInput($_POST['id']);
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM items WHERE id = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: index.php"); 
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
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
    <div class="container" style="background:#ccc;">
 <div><H1 class="mb-4" style="text-align:center;">Administrateur</H1></div>
	 <div class="row" style="border-top:1px solid black;">
		 
		 <div class="col-md-3" style="background:purple; color:white; height:500px;">
		   <div class="header mt-2">
         <h3>Dashboard</h3>
         <br>
         <br>
		   </div>
               <ul style="list-style:none;">
				   <div class="mt-4 mb-4">
					   <li><a class="mb-3" href="acc.php" style="color:white;font-size:1.5em;">Panneau</a></li>
				   
           </div>
           <br>
				   <div class="mt-4 mb-4">
					   <li><a class="" href="plan.php"style="color:white;font-size:1.5em;">Plan</a></li>
				
           </div>
           <br>
				   <div class="mt-4 mb-4">
					   <li>
					   <a class="" href="clients.php"style="color:white;font-size:1.5em;">clients</a>
					   </li>
				 
				   </div>
			   </ul>
		 </div>
		 <div class="col-md-9">
         <div class="row">
                <h3 style="text-align:center;"><em>Supprimer un item</em></h3>
                <br>
                <form class="form" action="delete.php" role="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <p class="alert alert-warning">Etes vous sur de vouloir supprimer ?</p>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-warning">Oui</button>
                      <a class="btn btn-default" href="index.php">Non</a>
                    </div>
                </form>
            </div>        
            
         </div>
                  
				 
		 </div>
	 </div>
 </div>

    </body>
</html>

