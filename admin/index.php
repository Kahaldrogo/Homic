<?php
 require 'database.php';
 $mesage='';
 $db = Database::connect();
 if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $mesage = '<label>Les champs sont requis </label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM adminis WHERE user = :username AND password = :password";  
                $statement = $db->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:acc.php");  
                }  
                else  
                {  
                     $mesage = '<label>Echec verifiez vos identifiants</label>';  
                }  
           } 
           
      }  
      
  

?>


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
            <link rel="stylesheet" href="sty.css">
            <title>Connexion</title>
        </head>
        <body>
        
                 <div id="login">
                            <h3>Connexion</h3>
                            <br>
                            <form method="post">
                            <label>User</label>
                            <input type="text" name="username" autocomplete="off" />
                            <label>Mot de passe</label>
                            <input type="password" name="password" autocomplete="off"/>
                            <div class="errorMsg"><?php echo $mesage; ?></div>
                            <input type="submit" class="btn btn-warning" name="login" value="Connexion">
                            </form>
                </div>



        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/js/mdb.min.js"></script>    
        </body>
    </html>