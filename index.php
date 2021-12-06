<?php
     session_start();

     if(!isset($_SESSION['username'])){

    
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP chat app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="w-400 p-5 rounded shadow">
       <form method="post" action="app/http/auth.php">
           <div class="d-flex justify-content-center align-items-center flex-column">
               <img src="img/logo.png" alt="" class="w-25">
               <h3 class="display-4 fs-1 text-center">
                   LOGIN
               </h3>
               <?php if(isset($_GET['error'])) { ?> 
                 <div class="alert alert-warning" role="alert">
                <?php echo htmlspecialchars($_GET['error']) ;
                ?>
           </div>
           
           <?php } ?>
               <?php if(isset($_GET['success'])) { ?> 
                 <div class="alert  alert-success" role="alert">
                <?php echo htmlspecialchars($_GET['success']) ;
                ?>
           </div>
           
           <?php } ?>
           </div>
           <div class="mb-3">
           <label  class="form-label">User name</label>
           <input type="text" class="form-control" name="username">
         
          </div>
          <div class="mb-3">
           <label  class="form-label">Password</label>
           <input type="password" class="form-control" name="password">
         
          </div>
          
          
         
         <button type="submit" class="btn btn-primary">Login</button>
         <a href="signup.php">Sign Up</a>
</form>
    </div>
</body>
</html>

<?php 


 } else {
    header("Location:home.php");
    exit;
     }

?>