<?php
 // 1- connect to db

$connect=  mysqli_connect("localhost","root","","hackthon");




	$district =  "Mysore";
	// echo "Mysore";



if(mysqli_connect_errno()){
	 die("cannot connect to database field:". mysqli_connect_error());   }

$query = "select count(*) as den ,dict_pop, dict_name from dict_master as d,pat as p where d.dict_name = p.dname and p.dname='$district'";


$result_district =  mysqli_query($connect, $query);
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
