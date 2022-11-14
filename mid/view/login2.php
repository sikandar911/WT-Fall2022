<?php include "../proc/login2pro.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table>
    <form action="" method="POST">
    <tr>
        <td> Username:</td>
        <td>
            <input type="text" name="unn">
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
            <button type="submit" name="submit">Login</button>
        </td>
    </tr>
    </form>
  </table>
</body>
</html>
