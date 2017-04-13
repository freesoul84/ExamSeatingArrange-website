<!doctype html>
<html lang="en">
<head>
<title>Exam seating arrangement
</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/classwisepages.css"/>
</head>
<body>
  <?php
  $server='localhost';
  $dbuser='root';
  $dbpass='alkesha15';
  $db='trial';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db); //database connectioon
  $branch="SELECT distinct department from studenttable ";//branch query
  $retvalbranch = mysqli_query( $conn,$branch );
    $year="SELECT distinct year from studenttable ";//year query
    $retvalyear = mysqli_query( $conn,$year );
   ?>
   <a href="selectoneof3.php" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
  <div class="container ">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
          <div class="panel panel-default panel-transparent">
            <div class="panel-body">
            <form class="form-horizontal content" action="branchyeardata.php" method="post" role="form">
             <div class="form-group">
                <label for="name">Branch Name :</label>
                  <!--<input type="text" class="form-control " id="name" placeholder="Branch Name">-->
                  <select class="form-control" name="department[]">
                    <!--selection of branch fro selection menu-->
                    <?php while($rows=mysqli_fetch_assoc($retvalbranch)){
                    echo "<option>".$rows['department']."</option>";
                  }
                    ?>
               </select>
            </div>
            <div class="form-group">
                <label for="name">Year</label>
                  <!--<input type="text" class="form-control" id="name" placeholder="Year">-->
                  <select class="form-control" name="year[]">
                    <?php
                    while ($rows=mysqli_fetch_assoc($retvalyear)) {

                    echo "<option>".$rows['year']."</option>";
                  }?>
               </select>
            </div>
            <div class="form-group">
              <!--click on submit button-->
  <center><input type="submit" name="submit" value="search" class="btn btn-success"></input></center>
       </div>
          </form>

    </div>
    </div>
   </div>
   </div>
 </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
