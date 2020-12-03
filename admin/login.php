<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWMTEC</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">

               <div class="login-wraper">
                <h2>LOGIN IN</h2><hr>
                <?php if(isset($_SESSION['error'])) { ?>
                       <div class="alert alert-danger" role="alert">
                        Sorry! Wrong Email and Password
                    </div>
                    <?php } ?>
                   <form action="confirmlogin.php" method="post">
                       <div class="form-group d-block">
                            <label for="email"><b>Email</b></label>
                            <input type="email" class="form-control" name="email"  required="">                      
                        </div>
                        <div class="form-group d-block">
                            <label for="possword"><b>Password</b></label>
                            <input type="password" class="form-control" name="password"  required="">                      
                        </div>
                        <button type="submit" class="btn btn-primary">LOG IN</button>
                   </form>
                   <div class="forgetpwd"><br>
                       <a href="" style="font-weight: 600;padding-bottom: 10px; display: block;">Forget password</a>
                   </div>
               </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div> 
    </div>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php unset($_SESSION['error']); ?>