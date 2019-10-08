<?php 


session_start();

if(isset($_SESSION['timez']))
	session_destroy();
?>

<!DOCTYPE html>
<html>
   <head>
     <style>
	  body{
			background-image:url("img01.png");
		}
      
	    div.container {
			position:relative;
			width: 70%;
			left:220px;
			border: 0px solid gray;
		}

		header{
			padding: 1em;
			color: black;
			background-color: white;
			border: 0px solid gray;
			clear: left;
			
			text-align: center;
			background-image:url("img01.png");
		}
        footer 
		{
			padding: 1em;
			color: white;
			border-radius: 10px;
			opacity: 0.5;
			background-color: black;
			clear: left;
			text-align: center;
		} 
		nav {
			float: left;
			max-width: 160px;
			hight:auto;
			margin: 0;
			padding: 1em;
		}

		nav ul {
			list-style-type: none;
			padding: 0;
		}
   
		nav ul a {
			text-decoration: none;
		}

		article {
			margin-left: 250px;
			margin-right: 25px;
			margin-bottom: 10px;
			border: 0px solid gray;
			height:600px;
			padding: 1em;
			overflow: hidden;
		}
		#button1
		{
			position:absolute; 
			top:25px;
			background-color:black;
			color:white; 
			border:0; 
			height:30px;
		}
		input[type=text], input[type=password] 
		{
      
           padding: 12px 20px;
           margin: 8px 0;
           display: inline-block;
           border: 1px solid #ccc;
           box-sizing: border-box;
        }
		#indiv
			{
			padding: 1.5em;
			color: white;
			border-radius: 10px;
			
			background-color: black;
			clear: left;
			text-align: center;
		} 
/* Set a style for all buttons */
        button 
		{
           background-color: #4CAF50;
           color: white;
           padding: 14px 20px;
           margin: 8px 0;
           border: none;
           cursor: pointer;
           width: 100%;
        }

        button:hover 
		{
            opacity: 5;
        }

/* Extra styles for the cancel button */
        .cancelbtn 
		{
           width: auto;
           padding: 10px 18px;
           background-color: #f44336;
        }

/* Center the image and position the close button */
        .imgcontainer 
		{
           text-align: center;
           margin: 24px 0 12px 0;
           position: relative;
        }

        img.avatar
		{
           width: 20%;
           border-radius: 25%;
        }

        .container 
		{
           padding: 16px;
        }
		.container1 
		{
           padding: 11px;
        }

        span.psw 
		{
           float: right;
           padding-top: 16px;
        }

/* The Modal (background) */
        .modal 
		{
           display: none; /* Hidden by default */
           position: fixed; /* Stay in place */
           z-index: 1; /* Sit on top */
           left: 10px;
           top: 0;
           width: 100%; /* Full width */
           height: 100%; /* Full height */
           overflow: auto; /* Enable scroll if needed */
           background-color: rgb(0,0,0); /* Fallback color */
           background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
           padding-top: 20px;
		   padding-right: 20px;
		   padding-bottom: 20px;
		   padding-top: 20px;
        }

/* Modal Content/Box */
        .modal-content 
		{
           background-color:#fefefe;
           margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
           border: 1px solid #888;
           width:40%; /* Could be more or less, depending on screen size */
        }

/* The Close Button (x) */
        .close 
		{
           position: absolute;
           right: 25px;
           top: 0;
           color: #000;
		   font-size: 35px;
           font-weight: bold;
        }

        .close:hover,.close:focus 
		{
           color: red;
           cursor: pointer;
        }

/* Add Zoom Animation */
        .animate 
		{
           -webkit-animation: animatezoom 0.9s;
           animation: animatezoom 0.9s 
        }

        @-webkit-keyframes animatezoom 
		{
           from {-webkit-transform: scale(0)} 
           to {-webkit-transform: scale(1)}
        } 
    
        @keyframes animatezoom 
		{
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }

/* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) 
		{	
            span.psw 
		    {
             display: block;
             float: none;
            }
            .cancelbtn 
			{
               width: 100%;
            }
   </style>
   </head>


   <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
   
<body>
      
		<div class="container">

			<header>
				<div id="indiv">
			    <a href="index.php">
					<font onclick=""color="white" style="font-family:verdana;position:absolute; top:45px; left:55px;"
						size="4">Home</font></a>
				<a href="rig.php" target="welcome">
					<font color="white" style="font-family:verdana;position:absolute; top:45px; left:150px;" size="4">Register</font></a>
				<a href="contect.php"target="welcome">
					<font onclick="" color="white" style="font-family:verdana;position:absolute; top:45px; left:270px;" 
						size="4">Contact</font></a>
				<a href="about_us.php"target="welcome">
					<font color="white" style="font-family:verdana;position:absolute; top:45px; left:380px;" 
						size="4">About Us</font></a>
				
				<a href="#">
					<font onclick="document.getElementById('id01').style.display='block' " color="white" 
						style="font-family:verdana;position:absolute; top:45px; left:900px;" size="4">Login</font></a>
				</div>
			   
			   <br>
			  
			   <font color="white" style="font-family:Centaur;" size="30px">
			    <marquee   behavior="alternate" style="position:absolute; top:160px;"width="1000">Play Book.In</marquee></font>
				
			   <img src="headerlogo1.jpg" width="1002px" height="230px">
			</header>
            
			<nav>  
			        <img src="img07.jpg"  width="210px" style="position:absolute; top:350px">
					
				<form method="POST" action="action4.php"  target="welcome">	
				
				    <font color="#fefefe" style="font-family:verdana;position:absolute; top:350px; left:40px;" 
						size="6">Search</font>
						
			        <input type="text" style="font-family:verdana;position:absolute; top:400px; left:32px;" size ="10"
						placeholder="SearchByName..." name="search" required>		
						
                    <input type="submit" style="font-family:verdana;position:absolute;border: none;
								 outline:none;border-radius: 10px;
								 background-color: grey;color: white;
								 padding: 10px 18px; top:409px; left:178px;" 
								name="submit" value="Search" >	
                </form>	
					<img src="img07.jpg"  width="210px" style="position:absolute; top:465px">  
					
					<div style="position:absolute;hight:auto; top:465px; left:40px;">
					    
						<font color="#fefefe" style="font-family:verdana;" size="6"> Categories</font><br>
	
<?php

	   $con = mysqli_connect("localhost","root","","playbooks");

# Check connection
       if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	   else
	    {
			
			
			$query ="select * from category";
			$res=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($res))
			{
				$na = $row['cat_nm'];
				
				echo "<br><a href='action4-1.php?name=$na' target='welcome' style='text-decoration:none;'><font  size='3'color='DARKblue'>";
				echo $row['cat_nm'] ;
				echo "</font></a>";
			}
			
			
		}
		
		
		mysqli_close($con);

?>					
						
                    </div>					
			</nav>

			<article name="welcome">
				<object type="text/html" data="default.php"  style=" position:absolute; top:355px; left:269px;" height="625px" width="770px " name="welcome">
        
				</object>
				
			</article>

			<footer>
				Copyright &copy; Play Books.In
			</footer>

		</div>
		

      <div id="id01" class="modal">
  
        <form class="modal-content animate" action="action3.php" method="POST">
            <div class="imgcontainer">
                 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                 <img src="ima01.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container1">
                <label><b>Username</b></label>
                <input type="text" style="width: 100%; top:"  placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" style="width: 100%;" placeholder="Enter Password" name="psw" required>
        
                <button type="submit" >Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container1" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" 
				class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
      </div>

</body>
</html>



























<!--
<html>
   <head>
     <style>
	 .no-spin::-webkit-inner-spin-button, .no-spin::-webkit-outer-spin-button{
			-webkit-appearance: none !important;
			margin:0 !important;
			-moz-appearance:textfield !important;
	}
     </style>
   </head>
   
   <body>
      <header>
	  </header>
   </body>
</html>
Containing over 5,000 entries from Aalto to ziggur...
-->