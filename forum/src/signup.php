<!DOCTYPE html>
<html xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../design/forum.css" rel="stylesheet" title="Style" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .content {
            margin-left: 10%;
            margin-right: 10%;
        }
    </style>
    </head>
    <body background="images/achtergrond%20auto's.jpg">

    <nav class="navbar navbar-inverse">
        <section class="container-fluid">
            <section class="navbar-header">
                <a class="navbar-brand" href="home.php">Forum.nl</a>
            </section>
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="Informatie.php">Informatie</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up</button>

                    <section id="id01" class="modal">

                        <form class="modal-content animate" action="home.php">
                            <section class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </section>

                            <section class="container">
                                <label><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="uname" required>

                                <label><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>

                                <button type="submit">Sign up</button>
                                <input type="checkbox" checked="checked"> Remember me
                            </section>

                            <section class="container" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            </section>
                        </form>
                    </section>
                </li>
            </ul>
        </section>
    </nav>



<?php
if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email'], $_POST['avatar']) and $_POST['username']!='')
{
	if(get_magic_quotes_gpc())
	{
		$_POST['username'] = stripslashes($_POST['username']);
		$_POST['password'] = stripslashes($_POST['password']);
		$_POST['passverif'] = stripslashes($_POST['passverif']);
		$_POST['email'] = stripslashes($_POST['email']);
		$_POST['avatar'] = stripslashes($_POST['avatar']);
	}
	if($_POST['password']==$_POST['passverif'])
	{
		if(strlen($_POST['password'])>=6)
		{
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$avatar = $_POST['avatar'];
				$dn = mysql_num_rows('select id from users where username="'.$username.'"');
				if($dn==0)
				{
					$dn2 = mysql_num_rows('select id from users');
					$id = $dn2+1;
					if(mysql_query('insert into users(id, username, password, email, avatar, signup_date) values ('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.$avatar.'", "'.time().'")'))
					{
						$form = false;
?>
<div class="message">You have successfully been signed up. You can now log in.<br />
<a href="../../forum2/Forum/login.php">Log in</a></div>
<?php
					}
					else
					{
						$form = true;
						$message = 'An error occurred while signing you up.';
					}
				}
				else
				{
					$form = true;
					$message = 'Another user already use this username.';
				}
			}
			else
			{
				$form = true;
				$message = 'The email you typed is not valid.';
			}
		}
		else
		{
			$form = true;
			$message = 'Your password must have a minimum of 6 characters.';
		}
	}
	else
	{
		$form = true;
		$message = 'The passwords you entered are not identical.';
	}
}
else
{
	$form = true;
}
if($form)
{
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
?>
<div class="content">
<div class="box">
	<div class="box_left">
    	<a href="<?php echo $url_home; ?>">Forum Index</a> &gt; Sign Up
    </div>
	<div class="box_right">
    	<a href="signup.php">Sign Up</a> - <a href="../../forum2/Forum/login.php">Login</a>
    </div>
    <div class="clean"></div>
</div>
    <form action="signup.php" method="post">
        Please fill this form to sign up:<br />
        <div class="center">
            <label for="username">Username</label><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="password">Password<span class="small">(6 characters min.)</span></label><input type="password" name="password" /><br />
            <label for="passverif">Password<span class="small">(verification)</span></label><input type="password" name="passverif" /><br />
            <label for="email">Email</label><input type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="avatar">Avatar<span class="small">(optional)</span></label><input type="text" name="avatar" value="<?php if(isset($_POST['avatar'])){echo htmlentities($_POST['avatar'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <input type="submit" value="Sign Up" />
		</div>
    </form>
</div>
<?php
}
?>


    <footer>
        <section class="community">

        </section>
        <section class="legal">
            <section class="container">
                <section class="row">
                    <section class="items col-xs-12">
                        <h3>©  Jorn, Inc. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></h3>
                    </section>
                </section>
            </section>
        </section>
    </footer>



    </body>

</html>