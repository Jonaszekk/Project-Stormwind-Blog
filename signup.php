<?php
include_once 'header.php';

?>

<link href="css/signup.css" rel="stylesheet">
<section class="signup-form">
<div class="center">
    <h1> Zarejestruj się </h1>
    <div class="signup-form-form">
    <form action="include/signup.inc.php" method="post">
    <div class="txt_field">
<input type="text" name="name" required>
<span></span>
<label>Imię i Naziwsko</label>
</div>
<div class="txt_field">
<input type="text" name="email" required>
<span></span>
<label>Email</label>
</div>
<div class="txt_field">
<input type="text" name="uid" required>
<span></span>
<label>Nazwa Użytkownika</label>
</div>
<div class="txt_field">
<input type="password" name="pwd" required>
<span></span>
<label>Hasło</label>
</div>
<div class="txt_field">
<input type="password" name="pwdrepeat" required>
<span></span>
<label>Powtórz hasło</label>
</div>

<input type="submit" name="submit" value="Sign Up">
<div class="signup_link">Masz już konto? <a href="login.php"> Zaloguj się </a>
<?php

if(isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput") {
        echo "<p>Wypełnij pola!<p>";

    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Wybierz odpowiednią nazwę użytkownika!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Wybierz odpowiedni email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Hasła nie są takie same!</p>";
    }
    else if ($_GET["error"] == "stmfailed") {
        echo "<p>Coś poszło nie tak, spróbuj ponownie!</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
        echo "<p>Nazwa użytkwonika jest już zajęta!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>Twoja Rejestracja przeszła pomyślnie!</p>";
    }

}

?>

</form>
 </div>



</section>







