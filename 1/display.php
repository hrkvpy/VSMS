<?php
error_reporting();
include("connection.php");

$queryd = "SELECT * FROM VEHICLES";
$datad = mysqli_query($conn,$queryd);
$totald = mysqli_num_rows($datad);



if($totald != 0){
	
	while($resultd = mysqli_fetch_array($datad)){
		
		echo "<a href='#'>".$resultd['v_no']."<br></a>"  ;
		
	} 
	
}else{
	echo "no records";
}

	

?>

