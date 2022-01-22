
<?php include('server.php') ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form class="form" id="createAccount" action="register.php" method="POST">
            <?php include('errors.php'); ?>
            <h1 class="form__title">Create Account</h1>
             
            <div class=" form-group">

                <input type="text"  class="form-control" name="username" value="<?php echo $username; ?>" autofocus placeholder="Username" required>
                 
            </div>
            <div class="form-group">

                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" autofocus placeholder="Email Address" required>
                 
            </div>
            <div class="form-group">

                <input type="password"  class="form-control" name="password_1" autofocus placeholder="Password" required>
                 
            </div>
            <div class="form-group">

                <input type="password" class="form-control" name="password_2" autofocus placeholder="Confirm password" required>
                 
            </div>
            <button class="btn btn-primary btn-block" name="reg_user" type="submit">Register</button>
                <div style="padding-top: 10px;"><a href="./" >Already have an account? Sign in</a></div>
        </form>
        
    </div>
            </div>
        </div>
            
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
