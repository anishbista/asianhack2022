<?php
    
    $db = mysqli_connect('localhost', 'root', '', 'megabyte');
    
    $username = $password = "";
    $err = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
        {
            $err = "Please enter username and password";
        }
        else{
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
        }
        if(empty($err))
        {
        
            $sql=  "select id,username,password from users where username = ?";
            $stmt = mysqli_prepare($db,$sql);
            mysqli_stmt_bind_param($stmt,"s",$param_username);
            $param_username = $username;
    
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
    
    
                if(mysqli_stmt_num_rows($stmt) == 1){
    
                    mysqli_stmt_bind_result($stmt,$id,$username,$dpassword);
                    
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $dpassword)
                        {
                            session_start();
                            $_SESSION['username'] = $username;
                            $_SESSION['id']=$id;
                            $_SESSION['loggedin']=true;
                            echo "<script>alert('You are successfully Logged in');</script>";
                            echo "<script>location.href='index.php';</script>";
                        }
                        else{
                            echo'<p align = "center"> Oh sorry username and password not match';
                            
                        }
                    }
                    
                }
                else{
                echo'<p align = "center"> Oh sorry username and password not match';
    
            }
    
        }
        
    }
    }
    ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <center>
    <div  class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.
            <button><a href="index.php">Home</button>
        </p> </center>
        </form>
    </div>
</body>
</html>