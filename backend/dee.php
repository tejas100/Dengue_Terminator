<?php
 // 1- connect to db

$connect=  mysqli_connect("localhost","root","","hackthon");


//$district = false;
if (!empty($_POST['Dist_name'])) {
	$district =  $_POST['Dist_name'];
	echo "string";
}

if(mysqli_connect_errno()){
	 die("cannot connect to database field:". mysqli_connect_error());   }

$quuey = "SELECT * FROM `pat` WHERE dname='Mysore'";

//select count(*) as den ,dict_pop, dict_name from dict_master as d,pat as p where d.dict_name = p.dname and p.dname='$district'
$result_district =  mysqli_query($connect, $quuey);
// $result_patient=  mysqli_query($connect, $query_patient);


if (! $result_district ) {
    $output =  "{'msg':'fail'}";
} else {
  while ($row = mysqli_fetch_assoc($result_district)) {
      $output[] = $row;
  }
  $info = $output;
}

print(json_encode($info));




mysqli_close($connect);
?>
