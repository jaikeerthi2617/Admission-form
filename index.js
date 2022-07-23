function msg() {
  var first=document.getElementById("first_name").value;
  var last = document.getElementById("last_name").value;
  var a = document.getElementById("mobile").value;
//names
  if(first.length<=2 || first.length>=20){
    window.alert("Name should be between 3 and 20");
  
    return false;
  }
  if (last.length <= 2 || last.length >= 20) {
    window.alert("Name should be between 3 and 20");
    return false;
  }
//phone number
  if (a == "") {
    window.alert("fill mobile number");
    return false;
  }
  if(a.length!=10){
    window.alert("Mobile number must be 10 digits");
    return false;
  }
  if((a.charAt(0)!=9) && (a.charAt(0)!=8) && (a.charAt(0)!=7)){
    window.alert( "Mobile number must start with 9 or 8 or 7");
     return false;

  }

}