<!--change passowrd-->
<!doctype html>
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/changepass.css"/>
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  $server='localhost';
  $dbuser='root';
 $dbpass='alkesha15';
 $db='trial';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);
  if(isset($_POST['changepassword']))
  {
    $currentpassword=$_POST['currentpassword']; #current password
    $newpassword=$_POST['newpassword'];#new password is taken here
    $confirmpassword=$_POST['confirmpassword'];#password is confirm here it is use for match with new password enter befor confirm password
  #  echo "$currentpassword";
  #    echo "$newpassword";
  #      echo "$confirmpassword";
        $querya="SELECT * from admintable where adminname='alkesha' ";
    $chg_pwd=mysqli_query($conn,$querya);
    $chg_pwd1=mysqli_fetch_array($chg_pwd);
    $data_pwd=$chg_pwd1['password'];
    if($data_pwd == $currentpassword){
      if($newpassword == $confirmpassword){
        $queryb="UPDATE admintable set password='$newpassword' where adminname='alkesha'";
        $update_pwd=mysqli_query($conn,$queryb);
       echo "<script>alert('Update successfully'); window.location='adminlogin.php'</script>";
      }
      else {
        echo "<script>alert('your new and confirm password are not match'); window.location='changepass.php'</script>";
      }
    }
    else{
      echo "<script>alert('your currentpassword is wrong'); window.location='changepass.php'</script>";
    }
  }

  ?>
    <a href="adminbranchyear.php" class="btn  back-button btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
<div class="container vertical-align">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
        <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal  content" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" role="form">
             <div class="form-group">
            <label>Current Password :</label>
            <input type="password" class="form-control " name="currentpassword" id="password" autocomplete="off"placeholder="current password"></input>
            <br>
            <label>New Password :</label>
            <input type="password" class="form-control " name="newpassword" id="password" autocomplete="off" placeholder="new password"></input>
<br>
            <label>Confirm Password :</label>
            <input type="password" class="form-control " name="confirmpassword" id="password" autocomplete="off" placeholder="confirm password"></input>
            </div>
            <div class="form-group">
      <center><button type="submit" name="changepassword" class="btn passcg btn-default">change password</button>&nbsp&nbsp
        <a href="datainsert.php" type="button" class="btn passcg btn-default">Back</a></center>
           </div>
</form>
</div>
</div>
</div>
</div>
</div>
  </div>
</body>
</html>
