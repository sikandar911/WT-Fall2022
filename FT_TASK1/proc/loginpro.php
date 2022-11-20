
<?php
include ("../model/mydb.php");

session_start();

    if(isset($_POST["unn"])||(isset($_POST["pinn"])))
      {
        $username1 = $_POST["unn"];
      $pin1 = $_POST["pinn"];

        $regconnection =new mydb();
        $connobj=$regconnection-> openconn();
       $loginquery = $regconnection -> checkuser($connobj,"reginfo",$username1,$pin1);
      
       if($loginquery->num_rows>0)
       {
        $_SESSION["un"]=$_POST['unn'];
        $_SESSION["pin"]=$_POST['pinn'];
        header("location:profile.php");
        
       } 
       else{
        echo "user does not exist. ";
        
       }
      }
       $regconnection-> CloseCon($connobj);  
         
      
?>