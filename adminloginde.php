<!doctype html>
<html>
<head>
<title>admin login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/admin.css"/>
<!--BootStrapValidator css-->
<link href="css/bootstrapValidator.min.css" rel="stylesheet" />
<!-- jQuery and BOOTstrap JS-->
<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/jquery-3.1.1.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--BootstrapValidator-->
<script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
</head>
<body style="background-color:#ffffff" >
  <a href="firstpageresponse.php" class="btn  back-button btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
  <?php
  session_start();
   $server='localhost';
   $dbuser='root';
   $dbpass='alkesha15';
   $db='trial';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);
if(isset($_POST['submit'])){
  $adminname=$_POST['adminname'];
  $password=$_POST['password'];
  $query ="SELECT * FROM admintable WHERE adminname='$adminname' AND password='$password'";
  $q=mysqli_query($conn,$query);

  if (mysqli_num_rows($q)==1) {
  //  echo "correct";
$_SESSION['adminname'] = $adminname;
$_SESSION['password'] = $password;
header('location:adminbranchyear.php');
  }
  else {
    $msg="adminname and/or password incorrect";
echo "<script type='text/javascript'>alert('$msg');</script> ";
  }
}  ?>
<div class="wrapper">
  <center><img src="images/Administrator Male-52.png" hspace="20" height="120" width="120"/></center>
    <form class="admin-signin" method="post" action="<?php $_PHP_SELF?>">
      <h5 class="admin-signin-heading"><b>Admin</b></h5>
      <input type="text" class="form-control" name="adminname" placeholder="admin" required="" autofocus="" />
      <br>
      <div >
       <span>
         <h5 class="admin-sign-heading"><b>Password</b>
       </span>
       <span class="forgot-pass">
        <a  href="forgotpassowrd.php" ><b>forgot password ?</b></a></h5>
      </span>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" autofocus=""/>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberme" name="rememberme"> Remember me
      </input>
        </label>
        <input type="submit" id="btn" name="submit" class="btn btn-lg btn-primary btn-block" value="Login"/>
    </form>
  </div>
  <!--validation of admin-->


</body>
</html>
