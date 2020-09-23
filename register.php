<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel = "stylesheet" href = "login.css" />
<head>
   <title>Uber_Insider Registration</title>
   <link rel = "icon" href =  
   "https://www.iconfinder.com/data/icons/logos-and-brands/512/347_Uber_logo-512.png" 
        type = "image/x-icon"> 
</head>

<body>
<?php

require_once "config.php";
 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "<font color=red>Please enter a username.</font>";
    } else{
        $sql = "SELECT id FROM log_in WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "<font color=red>This username is already taken.</font>";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "<font color=red>Oops! Something went wrong. Please try again later.</font>";
            }

            
            mysqli_stmt_close($stmt);
        }
    }
    
   
    if(empty(trim($_POST["password"]))){
        $password_err = "<font color=red>Please enter a password.</font>";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "<font color=red>Password must have atleast 6 characters.</font>";
    } else{
        $password = trim($_POST["password"]);
    }
    
  
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<font color=red>Please confirm password.</font>";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<font color=red>Password did not match.</font>";
        }
    }
    
  
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
       
        $sql = "INSERT INTO log_in (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
           
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
           
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
       
            if(mysqli_stmt_execute($stmt)){
                
                header("location: login.php");
            } else{
                echo "<font color=red>Something went wrong. Please try again later.</font>";
            }

          
            mysqli_stmt_close($stmt);
        }
    }
    
   
    mysqli_close($link);
}
?>
<div class="sidenav">
         <div class="login-main-text">
            <p class="zoom"style="font-size:100px">Uber</p><p class="zoom" style="font-size:60px">Insider </p> <br>
            <p class="zoom2"> Uber Employee's Database Management Web Application</p><br>
         </div>
      </div>
<div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <h2>Enter your details and register now!</h2>
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter a unique username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your six digits password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Enter your six digits password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                
    <div class="input-group">
     <button type="submit" name="resgister" value=Submit class="btn btn-black">Register</button>
     <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p style="padding-top:5%">
                  Already a member?<a href="login.php">Sign in</a>
                  </form>

   </body>
   