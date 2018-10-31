<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="login.css">
<title>SISTEM ADUAN DAN MAKLUMBALAS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>

<body>
<div class="signup-form"> 
    <form action="proclogin.php" method="post">
    <center><img src="img/logokvsa.png"  align="center" width="210" height="100" class="user"></center><br>
    <center><h4><b>SISTEM ADUAN DAN MAKLUMBALAS </b></h4></center><br>
        <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="id" placeholder="Username" required="required"><br>
      </div>
    </div>
       
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <input type="Password" class="form-control" name="psw" placeholder="Password" required="required">
      </div>
        </div>
        
    <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
        </div>
    </form>

    <center><p>Tiada akaun? Sila <a href="register.php">Register</a></p></center>
 
</body>
</html>                            