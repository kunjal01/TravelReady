function validateForm() {
  var x = document.myform.email.value;
  var y = document.myform.pass.value;
  var z = document.myform.rpass.value;
  var a = document.myform.name.value;
  if (a == "") {
    alert("Name must be filled out");
    return false;
  }  
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
  if (y == "") {
    alert("Password must be filled out");
    return false;
    
  }
  if (z == "") {
    alert("Confirm Password must be filled out");
    return false;
  }
  if (y != z) { 
                    alert ("\nPassword did not match, Please try again.") 
                    return false; 
  }  
  if(y==z) { 
                    alert("\n Password Matched!") 
                    return true; 
  } 
}