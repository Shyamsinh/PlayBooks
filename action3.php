<?php

		//$b= time()  ;
		//echo "<script>alert('time is start with $b');</script>";
	 
	   $con = mysqli_connect("localhost","root","","playbooks");

// Check connection
       if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	   else
	    {
			
			$id=$_POST['uname'];
	        $psw=$_POST['psw'];
			
			$query="select * from rag where uname = '$id'   and  pass = '$psw'";
			$res=mysqli_query($con,$query);
			$row=mysqli_fetch_array($res);
			
			if($id != $row['uname'])
			  {
				  //header("location:index.php");
				  //echo "<script>alert('invalid login id and password');</script>";
				  echo "invalid login id and password<a href='index.php'> try again  </a>with press f5 key";
			  }
		   else
		    {
				
		       if($id == "admin")
			   {
   				   # header("location:contect.php");
				   header("location:admin/admin_home.php");
			   }
			   else
			   {    
					$id = $row['name'];
					header("location:user/user_home.php?name=$id");
			   }
		    }
			mysqli_close($con);
		}
   

?>