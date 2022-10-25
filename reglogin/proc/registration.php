<?php
if(isset($_POST["submit"])){
 
if(file_exists("../data.json")){
  $info=json_decode(file_get_contents("../data.json"));
 foreach($info as $userinfo)
 {
   if($userinfo->Username==$_POST["un"])
   {
    echo $_POST["un"]." Already taken";
    return;
   }
   if($userinfo->NID_Number==$_POST["nid"])
   {
    echo $_POST["nid"]." Already registered by an other user";
    return;
   }
   if($userinfo->pnumber==$_POST["phone"])
   {
    echo $_POST["phone"]." Already registered by an other user";
    return;
   }
 }
    


$formdata = array(
	      'Username' => $_POST["un"],
	      'NID_Number' => $_POST["nid"],
	      'dob' => $_POST["dob"],
	      'Password'=> $_POST["pin"],
        'pnumber'=>$_POST["phone"],
        'sq'=>$_POST["sq"],
        'sqa'=>$_POST["answer"] );

 $prevdata = file_get_contents("../data.json");
 $newdata= json_decode($prevdata);
 $newdata[]= $formdata;

       $jsondata= json_encode($newdata, JSON_PRETTY_PRINT);

       if(file_put_contents("../data.json",$jsondata))
       {
        echo "Data saved successfully";
       }
       else 
       echo "No data saved"; 
    
  }


}
?>
     <html>
      <br><a href="../reg.php"> Return Registration form</a> <br>
      <a href="../login.php"> Login form</a>
     </html>

