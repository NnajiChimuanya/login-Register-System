<?php
 include_once "./components/myheader.php";
?>

<div class="container">
    <div>
        <h2> Sign up</h2> 
    </div>
    
    <p> Already have an account? <a href="./signIn.php">Sign in</a>
</div>


<div class="container">
<form class="form-group" action="./php/signup.php" method="post">
    <input type = "text" name = "fullname" placeholder="full Name" required>
    <input type = "text" name = "username" placeholder="username e.g mccarthy.." required>
    <input type = "email" name = "email" placeholder="email" required>
    <input type = "password" name = "password" placeholder="password" required>
    <input type = "password" name = "confirmPassword" placeholder="confirm password" required>

    <div class="container submit">
        <button type="submit" name="submit"> Log in</button>
    </div>

</form>
</div>

<?php

include_once "./components/myfooter.php";
?>