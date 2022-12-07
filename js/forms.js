  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;
var num=document.myform.contact.value; 
var x=document.myform.email.value;
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");    
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(password.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;  
  }  

  else if(num.length<10){  
    alert("Contact must be at least 10 characters long.");  
    return false;  
    }
else if (isNaN(num)){  
  document.getElementById("numloc").innerHTML="Enter Numeric value only";  
  return false;  
}

else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  


else{  
  return true;  
  }  


 
} 
 
  