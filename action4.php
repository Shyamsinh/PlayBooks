<?php
  
			 $con = mysqli_connect("localhost","root","","playbooks");

			# Check connection
			if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
			else
				{
					
					$name = $_POST['search'];
					$query ="select * from book where 	b_nm = '$name'";
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
							echo "<tr> <td colspan = '2'>
											 --------------------------------------------------------|
										<a href = 'rig.php?bname=$na&price=$pr'>	Add TO Cart</a>
											|-----------------------------------------------------------------
									   </td>";
							
							echo"</tr>";
							$a = $a + 1;
						}
						
						echo"</table>";
					if($a == 0)
						echo "<br>No books found for this name";
					
			
				}
		
		
			mysqli_close($con); 
?>