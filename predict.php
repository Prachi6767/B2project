<?php
include("/inc/connection.php");   
	$conn=connect();
 global $var1,$var2,$var3,$var4,$var5,$var6;

$sql1 = "SELECT Positive FROM `d_count` WHERE Date='17/05/2021'";     
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
  	$var1=$row["Positive"];
	
 
  }
 }
 else {
  echo "0 results";
}




$sql2 = "SELECT Positive FROM `d_count` WHERE Date='16/05/2021'";     
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
 	$var2=$row["Positive"];
	
  }
 }
 else {
  echo "0 results";
}



$sql3 = "SELECT Positive FROM `d_count` WHERE Date='15/05/2021'";     
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
 	$var3=$row["Positive"];
	
  }
 }
 else {
  echo "0 results";
}


$sql4 = "SELECT Positive FROM `d_count` WHERE Date='14/05/2021'";     
$result4 = $conn->query($sql4);
if ($result4->num_rows > 0) {
  // output data of each row
  while($row = $result4->fetch_assoc()) {
 $var4=$row["Positive"];
 
  }
 }
 else {
  echo "0 results";
}


$sql5 = "SELECT Positive FROM `d_count` WHERE Date='13/05/2021'";     
$result5 = $conn->query($sql5);
if ($result5->num_rows > 0) {
  // output data of each row
  while($row = $result5->fetch_assoc()) {
 $var5=$row["Positive"];
 
  }
 }
 else {
  echo "0 results";
}



$sql6 = "SELECT Positive FROM `d_count` WHERE Date='12/05/2021'";     
$result6 = $conn->query($sql6);
if ($result6->num_rows > 0) {
  // output data of each row
  while($row = $result6->fetch_assoc()) {
 $var6=$row["Positive"];
 
  }
 }
 else {
  echo "0 results";
}

$a1=$var1/$var2;

$a2=$var2/$var3;

$a3=$var3/$var4;

$a4=$var4/$var5;

$a5=$var5/$var6;


$res=$var1;


$avg_gf=($a1+$a2+$a3+$a4+$a5)/5;


$i=1;
for($i=1;$i<=5;$i++)
{

	$cal=pow($avg_gf,$i);echo $cal;echo"<br>";
	$no_of_cases=$res*$cal;
	echo $no_of_cases;
	echo"<br>";
}
?>