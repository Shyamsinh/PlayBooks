<?php
	
    if (!empty($_GET['name']))
		{
			$cat=$_GET['name'];
			
			 $con = mysqli_connect("localhost","root","","playbooks");

			# Check connection
			if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
			else
				{

					$query ="select * from book where b_cat = '$cat'";
					$res=mysqli_query($con,$query);
					$a = 0;
					
						echo "<table border='1'>";
					while($row=mysqli_fetch_array($res))
						{
							echo "<tr>";
							
							echo "<td><img src='".$row['b_img']." 'height='150px'width='120px'><br></td>";
							echo "<td> BOOK NAME : ".$row['b_nm']."<br>
									   CATAGORY &nbsp&nbsp : ".$row['b_cat']."<br>
									   PUBLISHER &nbsp&nbsp: ".$row['b_publisher']."<br>
									   EDITION &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : ".$row['b_edition']."<br>
									   BOOK PAGE &nbsp: ".$row['b_page']."<br>
									   PRICE (INR) &nbsp:  ".$row['b_price']."<br>
									   DESCRIPTION : ".$row['b_desc']."									   
								  </td></tr>";
								  $na=$row['b_nm'];
								  $pr=$row['b_price'];
							
							$a = $a + 1;
						}
						
						echo"</table>";
					if($a == 0)
						echo "<br>No books found for this category";
					
			
				}
		
		
			mysqli_close($con);
			
		}
	else{
        // Fallback behaviour goes here
			if(!empty($_POST['search']));
    }

	
	
	
	/*	echo "<table border='1'>";
					while($row=mysqli_fetch_array($res))
						{
							echo "<tr>";
							echo "<td>".$row['b_id']."</td>";
							echo "<td>".$row['b_nm']."</td>";
							echo "<td>".$row['b_cat']."</td>";
							echo "<td>".$row['b_desc']."</td>";
							echo "<td>".$row['b_publisher']."</td>";
							echo "<td>".$row['b_edition']."</td>";
							echo "<td>".$row['b_page']."</td>";
							echo "<td>".$row['b_price']."</td>";
							echo "<td>".$row['b_img']."</td>";
							
							echo"</tr>";
							$a = 1;
						}
						
						echo"</table>";*/
?>

