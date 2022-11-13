<?php include "../proc/registration.php";?>
<!DOCTYPE html>
<head>
</head>
<body>
    <h1>Registration form</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
    <table>
<tr>
       <td>
        Userame:
      </td> 
    <td>
        <input type="text" name="un" required placeholder="Enter username"><br>
        <?php echo $nameerror;?>
    </td>
    <tr>
        <td>PIN</td>   
        <td>
            <input type="password" name="pin" required placeholder="8 character pin" minlength="8" maxlength="8"><br>
       </td>
    </tr>
</tr>
    <tr>
        <td>NID number</td>   
        <td>
            <input type="text" name="nid" required placeholder="Enter your Valid NID" maxlength="20"><br>
            <?php echo $niderror;?>
       </td>
    </tr>
    <tr>
        <td>Date of birth</td>
         <td>
            <input type="date" name="dob" required> <br>
        </td>

    </tr>
    

    <tr>
        <td>Phone Number</td>
        <td>
            <input type="phone" name="phone" required  placeholder="01855787211"><br>
            <?php echo $phonenumbererror;?>
        </td>
    </tr>
    <tr>
        <td>Bank Details: </td>
        <td><input type="text" name="bname" placeholder="Dhaka Bank"></td>
        <td> <input type="text" name="bahname" placeholder="Account holder name"></td>
        <td><input type="text" name="banumber" placeholder="Account Number"></td>
    </tr>
    <tr>
        <td>Profile</td>
        <td>
            <input type="file" name="file1">
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input type="text" name="house" placeholder="house/flat"></td>
        <td><input type="text" name="road" placeholder="area/roadNo."></td>
        <td><input type="text" name="city" placeholder="City"></td>
        <td><input type="text" name="district" placeholder="district"></td>
    </tr>
<tr>
    <td>Security question</td>
    <td>
  <select name="sq" required> 
    <option value="favorite_teacher_name">Type your's favorite teacher name</option>
    <option value="age_during_college admission">What was your age during college duration?</option>
    <option value="favorite_food_iteam">What is your favaorite Dish?</option>
  </select>      
    </td>
   </tr>
   <tr>
    <td></td>
    <td>
        <input required type="text" name="answer" placeholder="Type_your_answer">
    </td>
    
</tr>


<tr>
    <td>
        <input type="submit" name="submit">
        <input type="reset">
    </td>
</tr>

    </table>
    </form>
   
</body>
</html>
