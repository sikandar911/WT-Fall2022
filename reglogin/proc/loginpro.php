<html>
  <body>
  <br><a href="reg.php"> Return Registration form</a> <br>
      <a href="login.php"> Login form</a><br><br><br>
  </body>
      
     </html>

<?php
$errorCount=0;

    if(isset($_POST["unn"])||(isset($_POST["pinn"])))
      {

        $data = file_get_contents("../data.json");
        $logindata = json_decode($data);

        foreach($logindata as $object)
        {
            if($object->Username==$_POST["unn"] && ($object->Password == $_POST["pinn"]) )
            { 
              echo "Login Successfull <br>";
              return;
              }
             
            }
            echo "invalid username or Password";
        }
        
        
       
      
?>

 