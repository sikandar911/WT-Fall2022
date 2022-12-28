<?php include "../proc/registration.php";?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="reg.css"> 
</head>
<body>
    <div class="top"><h1>eCash</h1>
       <h3>Create Your Account Now</h3></div>
        
    <div class="nav">
       <a href="#home">Home</a>
    <a href="#Login">Login</a>
    <a href="#sendmoney">Sendoney</a>
    <a href="#">cashout</a>
    </div>
    <h1 class="top">Registration form</h1>
    
   <div class="container" >
   <div id="error"></div> 
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return regvalidation()" method="POST" enctype="multipart/form-data">
    <table>
<tr>
       <td>
        Username:
      </td> 
    <td>
        <input type="text" id="un"name="un" placeholder="Enter username"><br>
    </td>
    <tr>
        <td>Full Name</td>   
        <td>
            <input type="Text" id="name"name="name"  placeholder="Enter full name" ><br>
       </td>
    </tr>
    <tr>
        <td>PIN</td>   
        <td>
            <input type="password" id="pin"name="pin"  placeholder="8 character pin" ><br>
       </td>
    </tr>
</tr>
    <tr>
        <td>NID number</td>   
        <td>
            <input type="text" id="nid" name="nid"  placeholder="Enter your Valid NID" ><br>
          
       </td>
    </tr>
    <tr>
        <td>Date of birth</td>
         <td>
            <input type="date" id="dob" name="dob" > <br>
        </td>

    </tr>
    

    <tr>
        <td>Phone Number</td>
        <td>
            <input type="textge" id="phone" name="phone"   placeholder="01855787211"><br>
        
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="text" id="bname" name="bname" placeholder="Dhaka Bank"></td>
</tr>
        <tr>
            <td>Bank Details: </td>
            <td> <input type="text" id="bahname" name="bahname" placeholder="Account holder name"></td>
        </tr>
        <tr>
            <td></td>
        <td><input type="text" id="banumber" name="banumber" placeholder="Account Number"></td>
    </tr>
    <tr>
        <td>Profile</td>
        <td>
            <input type="file" id="file1" name="file1">
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input type="text" id="house" name="house" placeholder="house/flat"></td>
    </tr>

    <tr> <td></td>
        <td><input type="text" id="road" name="road" placeholder="area/roadNo."></td>
        </tr>
        <tr>
            <td></td>
        <td><input type="text" id="city" name="city" placeholder="City"></td>
        </tr>
        <tr> <td></td>
        <td><input type="text" id="district" name="district" placeholder="district"></td>
    </tr>
<tr>
    <td>Security question</td>
    <td>
  <select name="sq" id="sq" > 
    <option value="favorite_teacher_name">Type your's favorite teacher name</option>
    <option value="age_during_college admission">What was your age during college duration?</option>
    <option value="favorite_food_iteam">What is your favaorite Dish?</option>
  </select>      
    </td>
   </tr>
   <tr>
    <td></td>
    <td>
        <input  type="text" id="answer" name="answer" placeholder="Type_your_answer">
    </td>
    
</tr>


<tr>
    <td>
        <button class="b" type="submit" name="submit"> Create Account </button>
 
    </td>
</tr>
<tr> <td><button type="reset"> Reset</button></td>
 </tr>

    </table>
    </form>
    </div>
    <script src="js/validation.js"></script>
</body>
</html>
