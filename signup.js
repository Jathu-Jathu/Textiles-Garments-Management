function validateFullName()
	{
	   let fname=document.getElementById("txtFullName").value;
		
		if((fname=="") || (fname == null))
		{
			alert("Please Enter Full Name !!!");
			return false;
			
		}
		return true;
	
	}
	
	function validateEmail()
	{
	   let email=document.getElementById("txtEmail").value;
		
		let at=email.indexOf("@");
		let dt=email.lastIndexOf(".");
		let len=email.length;
		
	
		if((at<2) || (dt-at<2) || (len-dt<2)) //Checking for the Invalid one 
		{
			alert("Please Enter a valid Email address !!!");
			return false;
			
		}
		return true;
	
	}
	
	function validatePassword()
	{
		let pass=document.getElementById("txtPassword").value;
		let cpass=document.getElementById("txtConfirmPassword").value;
		
		 if((pass!=cpass) || (pass.length < 5))
		 {
			 alert("Please Enter a correct Password !!!");
			 return false;
		 }
		  return true;
	}
	
	
	function validateAll()
	{
		if(validateFullName() && validateEmail() && validatePassword())
		{
		      alert("Sucessfully Registered !!!!");
			
		}else
			{
				event.preventDefault();
			}
	
			
	}
	