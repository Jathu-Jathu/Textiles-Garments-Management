<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JASH Textiles And Garments</title>
<link href="style6.css" rel="stylesheet" type="text/css">
	
	
	</head>
<body>

		 <header>

	  
 
	  <nav>
		   
          <ul>
   
              <li> <a href="home2.html">HOME</a></li>
              <li> <a href="login2.html">LOG IN/SIGN UP</a></li>
              <li> <a href="contact.html">CONTACT</a></li>
              <li><a href="about.html">ABOUT US</a></li>
              <li> <a href="newarrivals.html">NEW ARRIVALS</a></li>
              <li> <a href="review.html">REVIEW</a></li>
		    </ul>
		</nav>
    <img class="logo" src="images of jasht&g/WhatsApp Image 2023-10-04 at 22.27.18_79709c24.jpg" width="100" height="50">		
				
	 
	
	 <div class="banner">
      <div class="search-bar">
        <input type="text" placeholder="Search...">
       
      </div>
      <div class="cart-icon">
        <span id="cart-count">0</span>
        <img src="images of jasht&g/blue-shopping-cart-icon-4.jpg" alt="Cart Icon" width="40px">
      </div>
    </div>
  </header>
	  
  
	 
                         
							 
                     <div class="container" >  
                      <h3>LOG IN TO YOUR ACCOUNT...</h3>
           <form id="LoginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">>
                     <div>
                    <label for="username">Username</label>
                    <input type="text" placeholder="Username" id="username" name ="username" required>
                    </div>
                <div>
                      <label for="email">Email Address</label>
                      <input type="email" placeholder="Email" id="email" name = "email" required>
                </div>
			         <div>
                      <label for="password">Password</label>
                      <input type="password" placeholder="Password" id="password" maxlength="5" name = "password" required>
                       </div>

    
			       
			    <div>

      
       
          <center>
          
            <input type="checkbox" id="remember" name="remember">Remember me<br>
              <a href="./forgot password.html">Forgot your password?</a><br><br>
              <input type="submit" value="LOG IN"><br><br>
          </center>
          <p>Don't have an account yet?</p>
					 <a href="signup.html" class="btn">signup</a>
                 

             </div>
	</form>
 
  
	
	 
	</body>
</html>

	


<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "project";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO login (username,email,password) VALUES ('$username','$email','$password')";

    if (mysqli_query($conn, $sql))
    {
        echo "signup successfull";
    }
    else
    {
        echo "Error: " .$sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
	

             