
<?php	   
	   $con = mysqli_connect("localhost","root","","playbooks");

// Check connection
       if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	   else
	    {
			$fna=$_POST['fname'];
			$lna=$_POST['lname'];
	       
	        $mail=$_POST['email'];
			$phone=$_POST['phone'];
	        
			$gen=$_POST['Gender'];
			$city=$_POST['city'];
	        
			$uid=$_POST['uname'];
	        $pass=$_POST['pword'];
	        
			$name=$fna." ".$lna;
			
			$query="insert into rag values('$name','$uid','$pass','$gen','$mail','$phone','$city')";
			$res=mysqli_query($con,$query);
			if( $res = "" )
			{
				echo "null";
			}
		    else
		    {
		        echo "<h3>Registration successfully ... </h3>";	
					if($_COOKIE['bname'] !=  "123")
					{
						setcookie('uname',$name);
						header("location:addtocart.php");
					}
		    }
			mysqli_close($con);
		}
   

?>