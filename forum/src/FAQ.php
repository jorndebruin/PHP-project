<!DOCTYPE html>
<html xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP forum</title>
    <link rel="stylesheet" href="../design/forum.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>

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
            <li><button onclick="document.getElementById('id01').style.display='block'" name="signup" style="width:auto;">Sign up</button>

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


            <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

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

                            <button type="submit">Login</button>
                            <input type="checkbox" checked="checked"> Remember me
                        </section>

                        <section class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </section>
                    </form>
                </section>
            </li>
        </ul>
    </section>
</nav>

<section class="col-sm-8">
<ul id='faqs' style="align-content: center">
    <li>

        <p class='question'>This is a question?</p>
        <div class='answer'>This is the answer.</div><br>

        <p class='question'>This is a question?</p>
        <div class='answer'>This is the answer.</div><br>

        <p class='question'>This is a question?</p>
        <div class='answer'>This is the answer.</div><br>

        <p class='question'>This is a question?</p>
        <div class='answer'>This is the answer.</div><br>

        <p class='question'>This is a question?</p>
        <div class='answer'>This is the answer.</div><br>

        <p class='question'>This is a question?</p>
        <div class='answer'>This is the answer.</div>

    </li>
</ul>
</section>


</body>

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
</html>