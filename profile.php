<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/profile.css"/>
</head>
<body>
  <?php
  session_start();
  if (isset($_SESSION['adminname']) && isset($_SESSION['password'])) {
    ?>
    <a href="adminbranchyear.php" class="btn  back-button btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
  <div class="container vertical-align">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
        <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal  content" role="form">
             <div class="form-group">

              <center><img class="img-circle" src="images/Administrator Male-52.png" heignt="150" width="150"/>
   </center>
   <br>

   <center><label>A Name</label></center>
   <center><label>Raigad</label></center>

          </div>
</form>
</div>
</div>
</div>
</div>
</div>
<?php }
else{
  $msg="you are not login!";
  echo "<script type='text/javascript'>alert('$msg');</script>";
}?>
</body>
</html>
