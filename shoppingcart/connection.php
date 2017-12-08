<?php 
        $currency="&#36;";
	$servername="localhost";
	$username="root";
	$password="";
	$database="mydb";
        
$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );						

	$conn=new mysqli($servername,$username,$password,$database);
	if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
	}
	
?>