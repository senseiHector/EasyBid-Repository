
//Regex expression to only allow characters a-z,A-Z and 0-9
//Accepts a minimum of 1 character and a maximum of 20
var userRegex = /^[a-zA-Z0-9_]{1,20}$/;

//Create Regex for Email
var userEmailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

//Function to validate user input based on conditions set
function loginValidate(form){

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
  if(password.length=== 0){
    errors[errors.length] = "Please enter a password";
  }

  //If no errors alert user login was succeful
  if(errors.length <=0){
    alert("Login Succesful");
    window.open("../pages/home.html","_self");
  }

  //If an error is found output which error it is
  if(errors.length > 0){
    reportLoginError(errors);
    return false;
  }
  return false;
}

//Function to report which error made
function reportLoginError(errors){
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

//Function to validate user input based on conditions set
function registryValidate(form){
  //Create variable to store the first name the user enters
  var firstName = form.fname.value;

  //Create variable to store the last name the user enters
  var lastName = form.lname.value;

  //Create variable to store the email the user enters
  var email= form.email.value;

  //Store the username the user enters
  var username = form.username.value;

  //Store the password user enters
  var password = form.passwd.value;

  //Create an array to store the various types of errors
  var errors = [];


  //Check if user has entered a first name
  if(firstName.length=== 0){
    errors[errors.length] = "Please enter a first name";
  }

  //Check if user has entered a last name
  if(lastName.length=== 0){
    errors[errors.length] = "Please enter a last name";
  }

  //Check if user has entered a valid email
  if(!userEmailRegex.test(email)){
    errors[errors.length] = "Invalid Email";
  }

  //Test the username input against the Regex for username
  //Store the error message
  if(!userRegex.test(username)){
    errors[errors.length] = "Username Characters can only include 0-9, a-z and an underscore.";
  }

  //Check if username has entered a password
  if(password.length=== 0){
    errors[errors.length] = "Please enter a password";
  }



  //If no errors alert user login was succeful
  if(errors.length <=0){
    alert("Sign Up Succesful");
    window.open ("../login/index.php","_self");
  }

  //If an error is found output which error it is
  if(errors.length > 0){
    reportRegistryError(errors);
    return false;
  }
  return false;
}

//Function to report which error made
function reportRegistryError(errors){
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
