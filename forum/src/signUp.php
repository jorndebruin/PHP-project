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
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Valideer email adres
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

2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
<style type="text/css">
    input[type=text]
    {
        border: 1px solid #ccc;
        border-radius: 3px;
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        width:200px;
        min-height: 28px;
        padding: 4px 20px 4px 8px;
        font-size: 12px;
        -moz-transition: all .2s linear;
        -webkit-transition: all .2s linear;
        transition: all .2s linear;
    }
    input[type=text]:focus
    {
        width: 400px;
        border-color: #51a7e8;
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
        outline: none;
    }
    </style