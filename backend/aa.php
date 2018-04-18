<?php
 
// $name = $_GET['Name'];
// $password = $_GET['password'];
// $aadhaar = $_GET['aadhaar'];
// $phone = $_GET['Phone'];


$connect=  mysqli_connect("localhost", "root","", "pune");
if(mysqli_connect_errno())
{ die("cannot connect to database field:". mysqli_connect_error());   
}

	// $query="INSERT INTO `user_login` SET ID='',  
	// 					UserName="'$name'", 
	// 					Password="'$password'" ,
	// 					aadhaar="'$aadhaar'", 
	// 					phone_no="'$phone'")";
	//  // 


// $query="INSERT INTO `user_login`(`ID`, `UserName`, `Password`, `aadhaar`, `phone_no`) VALUES ('',,986565,256314,2525)";

$query = "insert into user_login(UserName,Password,aadhaar,phone_no) values ('" .$_GET['UserName']."','" .$_GET['Password'] . "','" .$_GET['aadhaar'] . "','" .$_GET['phone_no'] . "')";

	
	$result=  mysqli_query($connect, $query);
	if(! $result)
		{ 
		$output = "{'msg':'fail'}";}
	else{
	$output = "{'msg':'Data is inserted'}";
	}
	print(json_encode($output));// this will print the output in json
	

  
mysqli_close($connect);
?>