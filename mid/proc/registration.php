
<?php
$nameerror="";
$niderror="";
$phonenumbererror="";
if(isset($_POST["submit"])){
  
  if(isset($_FILES["file1"])){
    $target_dir="../files";
    $target_file=$target_dir.$_FILES["file1"]["name"];
    if(move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file))
    {
      echo "";
    }
    else
    {
      echo " sorry ,there was an error uploading file";
      return;
    }
  }


if(file_exists("../data.json")){
  $info=json_decode(file_get_contents("../data.json"));
 foreach($info as $userinfo)
 {
   if($userinfo->Username==$_POST["un"])
   {
    $nameerror=$_POST["un"]." Already taken.Try another";
    return;
   }
   if($userinfo->NID_Number==$_POST["nid"])
   {
    $niderror=$_POST["un"]." Already taken.Try another";
    return;
   }
   $phone=$_POST["phone"];
   
   if($userinfo->pnumber==$_POST["phone"])
   {
    $phonenumbererror="Invalid phone number! Use an other phone number";
    return;
   } 
 }
$nid=$_POST["nid"];
if(!preg_match("/^([0-9]{8})$/",$nid)){
  $niderror="Enter valid NID number";
  return;
}
$formdata = array(
	      'Username' => $_POST["un"],
	      'NID_Number' => $_POST["nid"],
	      'dob' => $_POST["dob"],
	      'Password'=> $_POST["pin"],
        'pnumber'=>$_POST["phone"],
        'Bank-name'=>$_POST["bname"],
        'Bank-holder-name'=>$_POST["bahname"],
        'Bank-account-number'=>$_POST["banumber"],
        'houseorflat'=>$_POST["house"],
        'roadNo'=>$_POST["road"],
        'city'=>$_POST["city"],
        'distrcit'=>$_POST["district"],
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



     