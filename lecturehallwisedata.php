<!--lecturehall wise data is present here-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrangement in Lecture Hall</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/bootstraap.css"/>
  <link rel="stylesheet" href="css/lecturehalldata.css"/>
</head>
<body>
  <a href="selectoneof3.php" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
  <?php
   $server='localhost';
   $dbuser='root';
   $dbpass='alkesha15';
   $db='trial';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection
  mysqli_query($conn,"UPDATE viewcount set views=views+1 where pagename='lecturehalldata'");
  $re=mysqli_query($conn,"SELECT * from viewcount where pagename='lecturehalldata' ");
  while ($view=mysqli_fetch_array($re)) {
  ?>
  <span class="glyphicon glyphicon-eye-open"></span><?php echo " ".$view['views'];} ?>
  <?php
  $classroomtake=$_POST["classroom"]; //classroom which is enter taken here
  if($classroomtake)
{
foreach ($classroomtake as $cl )
{
$class=mysqli_real_escape_string($conn,$cl);
}
}
$branchq="SELECT distinct department from trisub where classroom='$class'";//distinct department selection
$retvalbranch=mysqli_query($conn,$branchq);
$yearq="SELECT distinct year from trisub where classroom='$class'";//distinct year selection
$retvalyear=mysqli_query($conn,$yearq);
?>
<center><h2 class="table-header"><?php echo $class; ?></h2></center>
  <div class="panel panel-default">
    <table class="table" >

    <tr>
      <td rowspan="10">
      <table class="table table-hover" border="3">
        <tr>
          <td><lable>Branch :<label></td>
          <td><?php $rowbranch=mysqli_fetch_row($retvalbranch);
                    $rowyear=mysqli_fetch_row($retvalyear);
                    $branch1=$rowbranch[0];
                    $year1=$rowyear[0];
                  echo $year1." Year ".$branch1;

               ?></td>
        </tr>
        <?php
        $subq1="SELECT distinct subject,examdate,starttime,endtime from trisub where classroom='$class' AND year='$year1' AND department='$branch1'";
        $retvalsub1=mysqli_query($conn,$subq1);
        while($rowall1=mysqli_fetch_assoc($retvalsub1)){?>
        <tr>
          <td><?php echo $rowall1['subject'];?><!--subject--></td>
          <td><?php echo $rowall1['examdate']." / ".$rowall1['starttime']." to ".$rowall1['endtime']." "; ?><!--date and time is display here--></td>
        </tr>
        <?php } ?>
      </table>
    </td>
    </tr>
    <tr>
      <td rowspan="10">
      <table class="table table-hover" border="4">
        <tr>
          <td><lable>Branch :<label></td>
          <td><?php  $rowbranch=mysqli_fetch_row($retvalbranch);
                     $rowyear=mysqli_fetch_row($retvalyear);
                     $branch2=$rowbranch[0];
                     $year2=$rowyear[0];
                     echo $year2." Year ".$branch2;

               ?></td>
        </tr>
        <?php
        $subq2="SELECT distinct subject,examdate,starttime,endtime from trisub where classroom='$class' AND year='$year2' AND department='$branch2'";
        $retvalsub2=mysqli_query($conn,$subq2);
        while($rowall2=mysqli_fetch_assoc($retvalsub2)){?>
        <tr>
          <td><?php echo $rowall2['subject'];?><!--subject--></td>
          <td><?php echo $rowall2['examdate']." / ".$rowall2['starttime']." to ".$rowall2['endtime']." "; ?><!--date and time is display here--></td>
        </tr>
      <?php } ?>
      </table>
    </td>
    </tr>
  </table>
    <table class="table  main-table" border="2">
      <!--this table is also appear from database-->
      <?php
      $numq1="SELECT distinct enrollnumber from trisub where classroom='$class' AND year='$year1' AND department='$branch1'";
      $retvalnum1=mysqli_query($conn,$numq1);
      $numq2="SELECT distinct enrollnumber from trisub where classroom='$class' AND year='$year2' AND department='$branch2'";
      $retvalnum2=mysqli_query($conn,$numq2);
      ?>

<tr><th><center>Row 1</center><th><center>Row 2</center><th><center>Row 3</center><th><center>Row 4</center></th>
<tr><?php $count=1;
$count1=1; ?>
    <?php while(($count1%5)!=0) {$count=1;
      ?>
  <td rowspan="10">
  <table class="table table-hover" border="3">

    <?php while(($count%11)!=0) {
      $rownum1=mysqli_fetch_assoc($retvalnum1);//first branch  rollnumber selected here
    $rownum2=mysqli_fetch_assoc($retvalnum2);//second branch  rollnumber selected here
    ?>
    <tr>
      <td><?php $no1=$rownum1['enrollnumber']; echo $no1;  ?></td><!--first branch student seat here-->
      <td><?php $no2=$rownum2['enrollnumber']; echo $no2;  ?></td><!--second branch student seat here-->
    </tr>
    <?php $count=$count+1;} ?>
  </table>
</td>
<?php $count1=$count1+1;} ?>
</tr>
</table>
</div>
</body>
</html>
