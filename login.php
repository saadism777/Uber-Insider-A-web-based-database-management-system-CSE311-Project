<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel = "stylesheet" href = "login.css" />
<head>
   <title>Uber_Insider Login</title>
   <link rel = "icon" href =  
   "https://www.iconfinder.com/data/icons/logos-and-brands/512/347_Uber_logo-512.png" 
        type = "image/x-icon"> 
</head>
<div class="sidenav">
         <div class="login-main-text">
            <p class="zoom"style="font-size:100px">Uber</p><p class="zoom" style="font-size:60px">Insider </p> <br>
            <p class="zoom2"> Uber Employee's Database Management Web Application</p><br>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="session.php" method="POST">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Enter your six digits">
                  </div>
                  <button type="submit" value="Login" class="btn btn-black">Login</button><br>
                  <p style="padding-top:5%">Are you an employee at uber? Register <a href="register.php">here</a></p>
                  <p style="padding-top:40%"> Visit our official website <a href="https://www.uber.com/bd/en/" target="_blank">here </a> </p>
               </form>
            </div>
         </div>
      </div>
