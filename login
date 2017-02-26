<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<script type="text/javascript">
		

		//Regex expression to only allow characters a-z,A-Z and 0-9
		//Accepts a minimum of 1 character and a maximum of 20
		var userRegex = /^[a-zA-Z0-9_]{1,20}$/;

		//Function to validate user input based on conditions set
		function userValidate(form){

			//Store the username the user enters
			var username = form.username.value;

			//Store the password user enters
			var password = form.passwd.value;

			//Create an array to store the various types of errors
			var errors = [];

			//Test the username input against the Regex for username
			//Store the error message
			if(!userRegex.test(username)){
				errors[errors.length] = "Username Characters can only include 0-9, a-z and an underscore.";
			}

			//Check if username has entered a password
			if(password.length=== 0)
			{
				errors[errors.length] = "Please enter a password";
			}

			//If no errors alert user login was succeful
			if(errors.length <=0){
				alert("Login Succesful");
			}

			//If an error is found output which error it is
			if(errors.length > 0){
				reportError(errors);
				return false;
			}
			return true;
		}

		
		//Function to report which error made
		function reportError(errors)
		{
			//Store the message to be output indicating what error is present
			var prompt = "Errors";

			//Loop through the errors array and print the respective error
			for (var i =0; i< errors.length; i++) {
				var numError = i +1 ;
				prompt += "\n" + numError + ". " + errors[i];
			}
			//Alert the user
			alert(prompt);
		}

			

	</script>

</head>
<body>


	<!-- Create a form to accept username and login-->
			
	<form name = "userDetails" method="post" action="" onSubmit="return userValidate(this);">

		<!-- User enters username -->

		
		Username: <input type="text" name="username" id="username" maxlength="20" required autofocus> <br>

		<!-- User enters password -->

		Password: <input type="password" name="passwd"> <br>

		<!-- Login Button -->
		
		<input type="submit" name="login" value="Login">

	</form>

</body>
</html>
