
<?php
$errorCount=0;
session_start();

    if(isset($_POST["unn"])||(isset($_POST["answer"])))
      {

        $data = file_get_contents("../data.json");
        $logindata = json_decode($data);

        foreach($logindata as $object)
        {
            if($object->Username==$_POST["unn"] && ($object->sqa== $_POST["answer"]) )
            { 
              $_SESSION["un"]=$_POST['unn'];
              
              header("location:profile.php");
              }
             
            }
           
        }
        
       
      
?>