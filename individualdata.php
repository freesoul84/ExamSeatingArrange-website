<!--individual data is present here-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My exam seating arrangement</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/individual.css"/>
</head>
<body>
<a href="selectoneof3.php" class="btn  back-button btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
  <?php
     $server='localhost';
     $dbuser='root';
     $dbpass='alkesha15';
     $db='trial';
    $conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection
    mysqli_query($conn,"UPDATE viewcount set views=views+1 where pagename='individualdata'");
    $re=mysqli_query($conn,"SELECT * from viewcount where pagename='individualdata' ");
    while ($view=mysqli_fetch_array($re)) {
    ?>
    <span class="glyphicon glyphicon-eye-open"></span><?php echo " ".$view['views'];} ?>

    <?php  if(isset($_POST["submit"])){
    $roll=$_POST["rollno"];
    $sql = "SELECT rollno,stdname,department,year from studenttable where rollno=$roll"; //rollno,studentname department and year is selected here
      $retval = mysqli_query( $conn,$sql );
    $row=mysqli_fetch_array($retval);
        $rollno=$row[0]; #rollnumber
        $stdname=$row[1];#student name
        $department=$row[2]; #department
        $year=$row[3]; #student year
     ?>
    <div class="container vertical-align">
      <div class="row">
        <div class="col-xs-10 col-xs-push-1" >
          <div class="panel panel-default" >
              <div class="panel-body ">
                <form class="form-horizontal  content" role="form" >
                 <div class="form-group">
                  <table class="table table-hover ">

                    <tr>
                      <td><h5><b>Enrollment number:</b></h5><td>
                      <td class="textstyle"><?php echo $rollno; ?></td>
                    </tr>
                    <tr>
                      <td><h5><b>Student Name :</b></h5><td>
                      <td class="textstyle"><?php echo $stdname; ?></td>
                    </tr>
                    <tr>
                      <td><h5><b>Branch :</b></h5><td>
                      <td class="textstyle"><?php echo $department; ?></td>
                    </tr>
                    <tr>
                      <td><h5><b>Year :</b></h5><td>
                      <td class="textstyle"><?php echo $year; ?></td>
                    </tr>
                    <tr>
                      <td><h5><b>Unit test :</b></h5><td>
                      <td class="textstyle">second</td>
                    </tr>
                </table>
              </div>
            </form>
          </div>
        </div>
        <?php
          $sub="SELECT distinct subject from subjecttable where department='$department' AND year='$year'";
          $retvalsubject = mysqli_query( $conn,$sub);
          $count=mysqli_num_rows($retvalsubject);
         while($rows=mysqli_fetch_assoc($retvalsubject))
        {
             $subject=$rows['subject'];
             $number=$rollno;
             $sub=$subject;
             #date retrival
             $dateq="SELECT examdate from trisub where enrollnumber='$number' AND subject='$sub'";
             $retvaldate=mysqli_query($conn,$dateq);
            $rowd=mysqli_fetch_assoc($retvaldate);
               $edate=$rowd['examdate'];
               #$endtime=$rowet['endtime'];
               #starttime is calculated
             $starttimeq="SELECT starttime from trisub where enrollnumber='$rollno' AND subject='$subject'";
             $retvalstarttime=mysqli_query($conn,$starttimeq);
               $rowst=mysqli_fetch_array($retvalstarttime);
               $starttime=$rowst['starttime'];
               #end time calculated
             $endtimeq="SELECT endtime from trisub where enrollnumber='$rollno' AND subject='$subject'";
             $retvalendtime=mysqli_query($conn,$endtimeq);
               $rowet=mysqli_fetch_array($retvalendtime);
               $endtime=$rowet['endtime'];
               #classroom evaluation
             $classq="SELECT classroom from trisub where enrollnumber='$rollno' AND subject='$subject'";
             $retvalclass=mysqli_query($conn,$classq);
             $rowclass=mysqli_fetch_assoc($retvalclass);
             $class=$rowclass['classroom'];
          ?><div class="panel panel-default">
            <div class="panel-body ">
              <form class="form-horizontal  content" role="form" method="post" action="<?php $_PHP_SELF?>">
               <div class="form-group">
                <table class="table table-hover">
                  <tr>
                    <td><b>Classroom :</b><td>
                    <td class="textstyle"><?php echo $class ?></td><!--classroom is display here-->
                  </tr>
                    <tr>
                      <td><b>Exam Date :</b><td>
                      <td class="textstyle"><?php echo $edate ?></td><!--date is display here-->
                    </tr>
                    <tr>
                      <td><b>Time :</b><td>
                      <td class="textstyle"><?php echo $starttime." to ".$endtime ?></td><!--start time and end time is display here-->
                    </tr>
                    <tr>
                      <td><b>Subject Name :</b><td>
                      <td class="textstyle"><?php echo $subject ?></td><!--subject is display here-->
                    </tr>
                  </table>
                </div>
         </form>
  </div>
  </div>
  <?php
} }?>
  </div>
  </div>
  </div>
  </body>
  </html>
