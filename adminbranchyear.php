<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Filling of  seating arrangement </title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/classwisepages.css"/>
</head>
<body>
<!--php script-->
  <?php
  session_start();
  if (isset($_SESSION['adminname']) && isset($_SESSION['password'])) {
    ?>
    <?php
  $server='localhost';
  $dbuser='root';
  $dbpass='alkesha15';
  $db='trial';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);#database connection
  $branch="SELECT distinct department from studenttable "; //branch retrival query
  $retvalbranch = mysqli_query( $conn,$branch );
    $year="SELECT distinct year from studenttable "; //year retrival query
    $retvalyear = mysqli_query( $conn,$year );
   ?>
  <nav class="navbar  navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right nave-pills">
          <li class="dropdown ">
            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user white"></span><span class="caret"></span></a>
            <ul class="dropdown-menu ">
              <li  ><a href="profile.php" class="glyphicon glyphicon-user"> Profile</a></li><!--profile link-->
              <li><a href="setting.php" class="glyphicon glyphicon-cog"> Setting</a></li><!--setting link-->
              <li><a href="clear.php" class="glyphicon glyphicon-trash"> ClearDB</a></li><!--cleardb link-->
              <li><a href="logout.php" class="glyphicon glyphicon-off"> Signout</a></li><!--signout link-->
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container ">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" >
          <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal content" action="datainsert.php" method="post"role="form">
             <div class="form-group">
                <label class="control-label" for="name">Branch Name :</label>
                <!--selection of branch name-->
                <select class="form-control" name="department[]">
                   <?php while($rows=mysqli_fetch_assoc($retvalbranch)){
                   echo "<option>".$rows['department']."</option>";
                 }
                   ?>
              </select>
            </div>
            <div class="form-group">
                <label for="name">Year :</label>
                <!--selection of year-->
                <select class="form-control" name="year[]">
                  <?php
                  while ($rows=mysqli_fetch_assoc($retvalyear)) {

                  echo "<option>".$rows['year']."</option>";
                }?>
             </select>
            </div>
            <div class="form-group">
        <center><input type="submit" name="submit" value="select " class="btn btn-lg btn-success"></input></center><!--submit button-->
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
  <!-- jQuery  -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
