<?php
session_start();

?>
hellow 
<h2>
    <?php
    echo $_SESSION["un"];
    ?>
</h2> <br> <br>
<a href="logut.php"> logout</a>
