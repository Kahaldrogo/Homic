<?php
    require 'database.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT items.id, items.name, items.description, items.price WHERE items.id = ?");
    $statement->execute(array($id));
    $item = $statement->fetch();
    Database::disconnect();

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
					   <li><a class="mb-3" href="index.php" style="color:white;font-size:1.5em;">Panneau</a></li>
				   
           </div>
           <br>
				   <div class="mt-4 mb-4">
					   <li><a class="" href="plan.php"style="color:white;font-size:1.5em;">Plan</a></li>
				
           </div>
           <br>
				   <div class="mt-4 mb-4">
					   <li>
					   <a class="" href="#!"style="color:white;font-size:1.5em;">Notification</a>
					   </li>
				 
				   </div>
			   </ul>
		  </div>
		 <div class="col-md-9">
        
          
        <div class="row">
               <div class="col-md-4">
                    <h1><strong>Voir un item</strong></h1>
                    <br>
                    <form>
                      <div class="form-group">
                        <label>Nom:</label><?php echo '  '.$item['name'];?>
                      </div>
                      <div class="form-group">
                        <label>Description:</label><?php echo '  '.$item['description'];?>
                      </div>
                      <div class="form-group">
                        <label>Prix:</label><?php echo '  '.number_format((float)$item['price'], 2, '.', ''). ' fr';?>
                      </div>
                      <div class="form-group">
                        <label>Image:</label><?php echo '  '.$item['image'];?>
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="acc.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </div> 
                <div class="col-md-5  site mt-4">
                    <div class="thumbnail">
                        <img src="<?php echo '../images/'.$item['image'];?>" alt="...">
                        <div class="price"><?php echo number_format((float)$item['price'], 2, '.', ''). ' fr';?></div>
                          <div class="caption">
                            <h4><?php echo $item['name'];?></h4>
                            <p><?php echo $item['description'];?></p>
                           
                          </div>
                        </div>
                    </div>
                </div>
        
            
         
	 </div>
 </div>

           
    </body>
</html>

