<?php

if($user->is_loggedin()!="welcome")
{
    $user->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
    $uname = $_POST['txt_uname_email'];
    $umail = $_POST['txt_uname_email'];
    $upass = $_POST['txt_password'];

    if($user->login($uname,$umail,$upass))
    {
        $user->redirect('home.php');
    }
    else
    {
        $error = "Wrong Details !";
    }
}
?>
