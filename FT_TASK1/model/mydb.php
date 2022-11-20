<?php
class mydb
{
    function openconn()
    {
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $db="ecash";
        $conn= new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connect Failed %s\n".$conn->error);
        return $conn;
    }
    function reginsert($conn, $tablename,$username,$pin,$nid,$dob,$phone,$bankname,$accountholder,$accountnumber,$profile,$house,$area,$city,$district,$sq,$sqa)
    {
        $sql= "INSERT INTO $tablename(username,pin,nid,dob,phone,bankname,accountholder,accountnumber,profile,house,area,city,district,sq,sqa) VALUES 
              ('$username','$pin','$nid','$dob','$phone','$bankname','$accountholder','$accountnumber','$profile','$house','$area','$city','$district','$sq','$sqa')";
    if($conn->query($sql)==true)
    {
        $result= TRUE;
    }
    else{
     $result= FALSE;
    }
 return $result;
}

    function checkuser($conn,$table,$username,$pin)
    {
        $result=$conn->query("SELECT * FROM ". $table." WHERE username='".$username."'AND pin='".$pin."'");
        return $result;
    }

    function CloseCon($conn)
    {
    $conn -> close();
    }


}

?>