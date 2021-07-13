<?php
 include_once "./components/myheader.php";
?>

<form action="./php/forgotpassword.php" method="post">
    <input type="email" name="email" placeholder="Enter password...">
    <button type="submit" name="submit">Reset password</button>

</form>

<?php
include_once "./components/myfooter.php";
?>