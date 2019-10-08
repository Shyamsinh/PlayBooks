

<?php

	if(isset($_COOKIE['bname']))
		if($_COOKIE['bname'] != "123")
			{
				session_start();
	//echo $_GET['bname'];
	//echo $_GET['price'];
	
	$con = mysqli_connect("localhost","root","","playbooks");

				// Check connection
				if (mysqli_connect_errno())
					
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					
				else
					{
						
						$bname = $_COOKIE['bname'];
						$price = $_COOKIE['price'];
						
						$user = $_COOKIE['uname'];
						
						//$query1 = "SELECT * FROM cart WHERE b_name  = '$bname'";
						
							
								$query = "INSERT INTO cart VALUES('$user','$bname','$price')";
								$res = mysqli_query($con,$query);
								if($res != "" )
								{
									echo "Book Successfully Add Into Your Cart ...";
									$_COOKIE['bname']= "123";
									$_COOKIE['price'] = "123";
									$_COOKIE['uname'] =  "123";
								}
								else
									echo "Sorry we Are Not Able To Add book into cart so plese contact admin ... ";
						
					}
					
				mysqli_close($con);
			}
		

?>
