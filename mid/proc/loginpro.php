
<?php
$errorCount=0;
session_start();

    if(isset($_POST["unn"])||(isset($_POST["pinn"])))
      {

        $data = file_get_contents("../data.json");
        $logindata = json_decode($data);

        foreach($logindata as $object)
        {
            if($object->Username==$_POST["unn"] && ($object->Password == $_POST["pinn"]) )
            { 
              $_SESSION["un"]=$_POST['unn'];
              $_SESSION["pin"]=$_POST['pinn'];
              header("location:profile.php");
              }
             
            }
           
        }
        
       
      
?>