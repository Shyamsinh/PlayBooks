
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
	        $cont=$_POST['cont'];
			$mail=$_POST['email'];
		    $query1=$_POST['query'];
			$query="insert into contact values('$fna','$cont','$mail','$query1')";
			$res=mysqli_query($con,$query);
			if($res == "")
			{
				echo "null";
			}
		    else
		    {
		        echo "<h3>Thank you for contact us we will contact you soon ... </h3>";	 
		    }
			mysqli_close($con);
		}
   
?>