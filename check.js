
function validate(){
  var jusername =  document.getElementById("username" );
  if(username.value== ""){
    alert("Dont leave blank");
    jusername.focus();
    jusername.style.background = "#AF9999";
    return false;
  }
  else if (pw.value== ""){
    alert("Dont leave blank");
    document.getElementById("pw").focus();
    document.getElementById("pw").style.background = "#AF9999";
    return false;
    
  }
    else if (mail.value  == ""){
    alert("Dont leave blank");
    document.getElementById("mail").focus();
    document.getElementById("mail").style.background = "#AF9999";
    return false;
    
  }
    else if (tele.value== ""){
    alert("Dont leave blank");
    document.getElementById("tele").focus();
    document.getElementById("tele").style.background = "#AF9999";
    return false;
    
  }
     
  else{
   
	return true;
  }
  
}

function isOneChecked() {
   var result = true;
   var ii1 = document.getElementById("i1").checked;
   var ii2 = document.getElementById("i2").checked;
   var ii3 = document.getElementById("i3").checked;
  if(ii1){
    result = true ;
  }
   else if(ii2){
    result=  true;
  }
   else if(ii3){
    result = true;
  } else{
  result = false;
  }
  return result;
}
function atLeastOneChecked() {
   var result = true;
   var oo1 = document.getElementById("checkorder").checked;
   var oo2 = document.getElementById("checkorder2").checked;
   
  if(oo1){
    result = true ;
  }
   else if(oo2){
    result=  true;
  
 
  } else{
  result = false;
  }
  return result;
}


function validate2(){
  
  if (quantity.value== ""){
    alert("Dont leave blank");
    document.getElementById("quantity").focus();
    document.getElementById("quantity").style.background = "#AF9999";
    return false;
  }
  else if (!atLeastOneChecked()){
    alert("Check the box please");
    document.getElementById("checkorder").focus();
    document.getElementById("checkorder").style.background = "#AF9999";
    return false;
  }
    else if (comment.value==""){
    alert("Enter comment !");
    document.getElementById("comment").focus();
    document.getElementById("comment").style.background = "#AF9999";
    return false;
  }
  else if (dateorder.value==""){
    alert("Enter Date !");
    document.getElementById("dateorder").focus();
    document.getElementById("dateorder").style.background = "#AF9999";
    return false;
  }
  else if(!isOneChecked() ){
    alert("Choose method plz");
    return false;
  }

  
  else{
    return true;
  }
  
}
