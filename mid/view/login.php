<?php include "../proc/loginpro.php"; ?>
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
        <td> Password:</td>
        <td>
            <input type="password" name="pinn" maxlength="6" minlength="6">
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" name="submit">Login</button>
        </td>
    </tr>
    </form>
  </table>
 <a href="login2.php">Forgot Password</a>
</body>
</html>
