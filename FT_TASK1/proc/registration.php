
<?php
include ("../model/mydb.php");
$nameerror="";
$niderror="";
$phonenumbererror="";
if(isset($_POST["submit"])){
  
  if(empty($_FILES["file1"]["name"])){
    echo " No File selected";
    return;
  }
  else{
    if(move_uploaded_file($_FILES["file1"]["tmp_name"], "../files/". $_POST["un"].".jpg"))
    {
      $filename="../files/".$_POST["un"].".jpg";
    }
    else
    {
      echo " sorry ,there was an error uploading file";
      return;
    }
  }


// if(file_exists("../data.json")){
//   $info=json_decode(file_get_contents("../data.json"));
//  foreach($info as $userinfo)
//  {
//    if($userinfo->Username==$_POST["un"])
//    {
//     $nameerror=$_POST["un"]." Already taken.Try another";
//     return;
//    }
//    if($userinfo->NID_Number==$_POST["nid"])
//    {
//     $niderror=$_POST["un"]." Already taken.Try another";
//     return;
//    }
//    $phone=$_POST["phone"];
   
//    if($userinfo->pnumber==$_POST["phone"])
//    {
//     $phonenumbererror="Invalid phone number! Use an other phone number";
//     return;
//    } 
//  }
$nid=$_POST["nid"];
if(!preg_match("/^([0-9]{8})$/",$nid)){
  $niderror="Enter valid NID number";
  return;
}
$regconnection =new mydb();
$connobj=$regconnection-> openconn();

$userquery = $regconnection->reginsert($connobj,"reginfo",$_POST['un'],
	       $_POST['pin'],
	     $_POST['nid'],
	       $_POST['dob'],
       $_POST['phone'],
        $_POST['bname'],
        $_POST['bahname'],
        $_POST['banumber'],
        $filename,
        $_POST['house'],
       $_POST['road'],
        $_POST['city'],
        $_POST['district'], 
       $_POST['sq'],
       $_POST['answer']
      );

       if($userquery==true)
       {
        echo " Registration done";
        
       }
       else
       {
        echo " Something wrong! Try again";
       }
    $regconnection->CloseCon($connobj);
  }

?>



     