
<!DOCTYPE html>
<html>
<head>
<style>
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
<script>
function nanphone()
{
  var phone=document.myForm.cont.value;
  if (phone != Namber)
  {
    alert("Enter correct number");
  }
}
</script>
</head>
<body>
  
     <h1>Register</h1>
	 <font size="5" style="font-family:Impact">
	 <form action="action1.php" method="POST" name="myForm">
	 <table >
	    <tr>
		    <td>Full Name:</td>
			<td><input type="text" name="fname" size="50" placeholder="Enter Your Full Name" required></td>
		</tr>
        
        <tr>
		    <td>User Id:</td>
			<td><input type="text" name="uid" size="50" placeholder="Enter Your User Id" required></td>
		</tr>
		<tr>
		    <td>Pass Word:</td>
			<td><input type="password" name="pass" size="50" placeholder="Enter Your Pass Word" required></td>
		</tr>
		<tr>
		    <td>RE-ENTER PASSWORD:</td>
			<td><input type="password" name="pass" size="50" placeholder="Enter Your Pass Word" required></td>
		</tr>
		<tr>
		    <td>Gender:</td>
		</tr>
		<tr>
		    <td>Male <input type="radio" name="Gender" value="Male"required></td>
			<td>Female <input type="radio" name="Gender" value="Female"></td>
		</tr>
		<tr>
		    <td>Contect No:</td>
			<td><input type="number" class="no-spin" name="cont" size="50" min="1111111111" max="9999999999"placeholder="Enter contect num" required></td>
		</tr>
		<tr>
		    <td>Email Id:</td>
			<td><input type="email" name="email" size="50" placeholder="Enter Your Email Id"required></td>
		</tr>
		<tr>
			<td><b>City:</b>&nbsp;&nbsp;</td>
			<td>
				<select style="width: 195px;" name="city">
			        <option>Ahmedabad
					<option>Baroda
					<option>Jamnagar
					<option>Rajkot
					<option>Porbandar
					<option>Anand
					<option>Surat
					<option>Surendranagar
					<option>Jamnagar
					<option>Junagadh
					<option>Amreli
					<option>Bhavnagar
					<option>Mehsana
				</select>
		</tr>
        </font>
        <tr>
		    <td><button type="submit" name="register" value="Register" style="width: 80%">Register</button></td>
			<td><button type="reset" name="Clere" style="width: 30%">Clere</button></td>
		</tr>
		
     </table>
	 </form>
	 
</body>
</html>