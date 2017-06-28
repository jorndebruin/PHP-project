<?php


include('connect.php');


if(isset($_POST['action']))
{
if($_POST['action']=="login")
{
$email = mysqli_real_escape_string($connection,$_POST['email']);
$password = mysqli_real_escape_string($connection,$_POST['password']);
$strSQL = mysqli_query($connection,"SELECT email FROM gebruiker where email='".$email."' and ww='".md5($password)."'");
$Results = mysqli_fetch_array($strSQL);
if(count($Results)>=1)
{
$message = $Results['name']." Login Gelukt!";
}
else
{
$message = "verkeerd emial-adres of wachtwoord!";
}
}
elseif($_POST['action']=="signup")
{
$name       = mysqli_real_escape_string($connection,$_POST['name']);
$email      = mysqli_real_escape_string($connection,$_POST['email']);
$password   = mysqli_real_escape_string($connection,$_POST['password']);
$query = "SELECT email FROM gebruiker where email='".$email."'";
$result = mysqli_query($connection,$query);
$numResults = mysqli_num_rows($result);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
{
$message =  "geen bestaand email adres, probeer het opnieuw!";
}
elseif($numResults>=1)
{
$message = $email." Email bestaal al :(";
}
else
{
mysql_query("insert into gebruiker(name,email,password) values('".$name."','".$email."','".md5($password)."')");
$message = "Signup gelukt!";
}
}
}

?>
<!-- Login and Signup forms -->
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Login</a></li>
        <li><a href="#tabs-2" class="active">Signup</a></li>

    </ul>
    <div id="tabs-1">
        <form action="" method="post">
            <p><input id="email" name="email" type="text" placeholder="Email"></p>
            <p><input id="password" name="password" type="password" placeholder="Password">
                <input name="action" type="hidden" value="login" /></p>
            <p><input type="submit" value="Login" /></p>
        </form>
    </div>
    <div id="tabs-2">
        <form action="" method="post">
            <p><input id="name" name="name" type="text" placeholder="Name"></p>
            <p><input id="email" name="email" type="text" placeholder="Email"></p>
            <p><input id="password" name="password" type="password" placeholder="Password">
                <input name="action" type="hidden" value="signup" /></p>
            <p><input type="submit" value="Signup" /></p>
        </form>
    </div>
</div>