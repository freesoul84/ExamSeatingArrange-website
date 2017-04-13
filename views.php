<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  $server='localhost';
  $dbuser='root';
  $dbpass='alkesha15';
  $db='trial';

 $conn=mysqli_connect($server,$dbuser,$dbpass,$db);
$find=mysqli_query($conn,"SELECT count from user_count");
while ($row=mysqli_fetch_assoc($conn,$find)) {
  $current=$row['count'];
  $new=$current+1;
  $update=mysqli_query("UPDATE 'user_count' set count='$new'");
  echo $new;
}
  ?>
</body>
</html>
