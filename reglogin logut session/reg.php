
<!DOCTYPE html>
<head>
</head>
<body>
    <h1>Registration form</h1>
    <form action="proc/registration.php" method="POST">
    <table>
<tr>
       <td>
        Userame:
      </td> 
    <td>
        <input type="text" name="un" required placeholder="Enter username"><br>
    </td>
</tr>
    <tr>
        <td>NID number</td>   
        <td>
            <input type="text" name="nid" required placeholder="Enter your Valid NID" maxlength="20"><br>
       </td>
    </tr>
    <tr>
        <td>Date of birth</td>
         <td>
            <input type="date" name="dob" required> <br>
        </td>

    </tr>
    <tr>
        <td>PIN</td>   
        <td>
            <input type="password" name="pin" required placeholder="6 character pin" minlength="6" maxlength="6"><br>
       </td>
    </tr>

    <tr>
        <td>Phone Number</td>
        <td>
            <input type="text" name="phone" required maxlength="14" placeholder="01855787211"><br>
        </td>
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
