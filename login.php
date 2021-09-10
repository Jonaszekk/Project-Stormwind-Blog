<?php
include_once 'header.php';

?>

<link href="css/login.css" rel="stylesheet">


<section class="signup-form">
<div class="center">
<h1> Logowanie </h1>
<form action="include/login.inc.php" method="post">
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

<input type="submit" name="submit" value="Login">
<div class="signup_link"> Nie masz konta? <a href="signup.php"> Zajerestuj się </a>

<?php
    if(isset($_GET["error"])) {

if ($_GET["error"] == "emptyinput") {
    echo "<p>Wypełnij pola!<p>";

}
else if ($_GET["error"] == "wronglogin") {
    echo "<p>Niepoprawny login!</p>";
}
else if ($_GET["error"] == "wrongpassword") {
    echo "<p>Niepoprawne hasło!</p>";
}


}

?>

</form>
</div>
    




</section>


</body>
</html>







