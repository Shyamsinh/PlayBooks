
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: #f1f1f1;
}
button
{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    
}
.no-spin{
	-webkit-appearance: none ;
	margin:0 ;
	-moz-appearance:textfield ;
}
</style>
</head>
<body bgcolor="w">
  
     <h1>Contact Us</h1>
	 <font size="5" style="font-family:Impact">
	 <form action="action2.php" method="POST">
	 <table >
	    <tr>
		    <td>Full Name:</td>
			<td><input type="text" name="fname" size="50"placeholder="Enter Your Full Name" required></td>
		</tr>
        
        
		
		    <td>Email Id:</td>
			<td><input type="email" name="email" size="50" placeholder="Enter Your Email Id" required></td>
		</tr>
		<tr>
		    <td>Contect No:</td>
			<td><input type="number" class="no-spin" name="cont" size="50" min="1111111111" max="9999999999"placeholder="Enter contect num" required></td>
		</tr>
          <tr>
		  <td>Query:</td>
		  <td><textarea cols="40" rows="10" name='query' required></textarea></td>
		  </tr>
        </font>
        <tr>
		    <td><button type="submit" name="submit" value="submit" style="width: 80%">send</button></td>
			<td><button type="reset" name="Clere" style="width: 30%">Clere</button></td>
		</tr>
		
     </table>
	 </form>
	 
</body>
</html>