<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JASH Textiles And Garments</title>
<link href="style18.css" rel="stylesheet" type="text/css">
	

	</head>


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
	<body>
	
    <form id="form1" name="form1" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
   <table width="478" border="0" align="center">
  <tr>
    <td colspan="2"><h1 align="center">CREATE YOUR ACCOUNT...</h1></td>
    </tr>
  <tr>
    <td width="251">First Name</td>
    <td width="217"><label for="txtFirstName"></label>
      <input type="text" name="txtFirstName" id="txtFirstName" /></td>
  </tr>
  <tr>
    <td width="251">Last Name</td>
    <td width="217"><label for="txtLastName"></label>
      <input type="text" name="txtLastName" id="txtLastName" /></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><label for="txtphone"></label>
      <input type="text" name="txtPhone" id="txtPhone" /></td>
  </tr>
  <tr>
    <td>Email Address</td>
    <td><label for="txtemail"></label>
      <input type="text" name="txtEmail" id="txtEmail" /></td>
  </tr>

  <tr>
    <td>Password</td>
    <td><label for="txtPassword"></label>
      <input type="password" name="txtPassword" id="txtPassword" /></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><label for="txtConfirmPassword"></label>
      <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" /></td>
      
  </tr>
  


		</table>

		</form>
    <center>

      <input type="checkbox" id="remember" name="remember">I've read and agree to the
      <a href="./termsandconditions.html">TERMS & CONDITIONS</a><br><br>
      <input type="submit" value="SIGN UP"><br><br>
     </center>

		
		<script src="signup.js"></script>
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
    $txtFirstName = $_POST["txtFirstName"];
    $txtLastName = $_POST["txtLastName"];
    $txtPhone = $_POST["txtPhone"];
    $txtEmail = $_POST["txtEmail"];
    $txtPassword = $_POST["txtPassword"];
    $txtConfirmPassword = $_POST["txtConfirmPassword"];

    $sql = "INSERT INTO signup (txtFirstName,txtLastName,txtPhone,txtEmail,txtPassword,txtConfirmPassword) VALUES ('$txtFirstName','$txtLastName',$txtPhone','$txtEmail','$txtPassword,'$txtConfirmPassword')";

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