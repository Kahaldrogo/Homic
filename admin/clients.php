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
					   <a class="" href="clients.php"style="color:white;font-size:1.5em;">Client</a>
					   </li>
				 
				   </div>
			   </ul>
		 </div>
		 <div class="col-md-9">
                           
            <div class="row">
                <h2 style="text-align:center;"><em>Client </em></h2>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Telephone</th>
                     
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require 'database.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT client.id, client.name, client.email, client.tel FROM client ORDER BY client.id DESC');
                        while($clients = $statement->fetch()) 
                        {
                            echo '<tr>';
                            echo '<td>'. $clients['name'] . '</td>';
                            echo '<td>'. $clients['email'] . '</td>';
                            echo '<td>'. $clients['tel']. '</td>';
                          
                            echo '<td width=300>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$clients['id'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
                  
				 
		 </div>
	 </div>
 </div>

       
        
    </body>
</html>
