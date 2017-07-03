<!DOCTYPE html>
<html xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../design/forum.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>

    <style>
    .col-sm-8 {
        color: white;
    }
</style>
</head>
<?php

    include 'connect.php';

    if(isset($_POST['signup'])) {
        session_start();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if($password == $password2) {
            $password = md5($password);
            $query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
        } else {
            $_SESSION['message'] = "The passwords do not match";
        }
    }

?>
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

<section class="container-fluid text-center">
    <section class="row content">
        <section class="col-sm-2 sidenav">
            <h3><button <a href="#">Auto's</a></button></h3>
            <h3><button <a href="#">Boten</a></button></h3>
            <h3><button <a href="#">Motoren</a></button></h3>
        </section>
        <section class="col-sm-8 text-left">


            <section class="container">
                <h1>Auto's</h1><br>
                <section id="myCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <section class="carousel-inner">

                        <section class="item active">
                            <img src="images/Lambo.jpg" alt="Los Angeles" style="width:100%;">
                            <section class="carousel-caption">
                                <h3>Lamborghini Aventador</h3>
                                <p>De Lamborghini Aventador is een sportwagen van het Italiaanse automerk Lamborghini.
                                    De Aventador kwam in 2011 op de markt en is de opvolger van de Lamborghini Murciélago
                                    die in 2010 uit productie ging. Hij stond op de Autosalon van Genève en ging als LP700-4
                                    in productie.</p>
                            </section>
                        </section>

                        <section class="item">
                            <img src="images/BMW%20X6.jpg" alt="Chicago" style="width:100%;">
                            <section class="carousel-caption">
                                <h3>BMW s6</h3>
                                <p>De BMW X6 is een luxueuze SUV die in 2008 door BMW in productie is genomen. Ondanks het
                                    feit dat BMW claimt dat het een kruising is tussen een coupé en een SUV is deze auto groter
                                    dan de X5. De auto wordt gebouwd in de Amerikaanse BMW-fabriek in Spartanburg.
                                </p>
                            </section>
                        </section>

                        <section class="item">
                            <img src="images/mcLaren%20P1.jpg" alt="New York" style="width:100%;">
                            <section class="carousel-caption">
                                <h3>McLaren</h3>
                                <p>De McLaren P1 is een plug-inhybridesportwagen geproduceerd in beperkte oplage door de Britse
                                    autofabrikant McLaren Automotive. De maximale snelheid van de wagen is 349 km/u en hij trekt
                                    in 2,8 sec van 0 km/u op naar 100 km/u, in 6,8 sec naar 200 km/u en in 16,5 sec naar 300 km/u.
                                    Inmiddels komt er ook een Mclaren P1 GTR die bedoeld is voor op het circuit. Om deze te kunnen
                                    aanschaffen moet je ook de straatversie van de P1 hebben.
                                </p>
                            </section>
                        </section>

                        <section class="item">
                            <img src="images/BMW%20i8.jpg" alt="New York" style="width:100%;">
                            <section class="carousel-caption">
                                <h3>BMW i8</h3>
                                <p>De BMW i8 is een door Adrian van Hooydonk [2][3] ontworpen hybride auto, ontwikkeld door BMW.
                                    Het voertuig is een doorontwikkeling van een conceptmodel genaamd BMW Vision Efficient Dynamics
                                    uit 2009. Het voertuig is een plug-inhybride, naast 98 lithiumpolymeerbatterijcellen is er een
                                    driecilinder-benzinemotor met turbo.</p>
                            </section>
                        </section>

                        <section class="item">
                            <img src="images/Audi%20r8.jpg" alt="New York" style="width:100%;">
                            <section class="carousel-caption">
                                <h3>Audi R8</h3>
                                <p>De Audi R8 is een sportwagen van het Duitse automerk Audi. Het is een productieversie van de Audi
                                    Le Mans quattro conceptauto die in 2003 werd gepresenteerd. De naam R8 is een verwijzing naar de
                                    R8 raceauto van Audi waarmee onder andere 5 keer de 24 uur van Le Mans werd gewonnen. De auto werd
                                    voorgesteld op de autosalon van Parijs in 2006.</p>
                            </section>
                        </section>

                    </section>


                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </section>
            </section>



                <div class="container">
                    <h2>Reactions</h2><br>

                    <div class="media">
                        <div class="media-left media-top">
                            <img src="images/images.jpg" class="media-object" style="width:80px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Voorbeeld Persoon1</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            </div>
            <hr>
            <div class="media">
                <div class="media-left media-middle">
                    <img src="images/images.jpg" class="media-object" style="width:80px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Voorbeeld Persoon2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <div class="media-left media-bottom">
                    <img src="images/images.jpg" class="media-object" style="width:80px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Voorbleed Persoon3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            </div>


        </section>


        <section class="col-sm-2 sidenav">
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>
            <section class="well">
                <p>Hier komt heel veel reclame voor geld$$$</p>
            </section>

        </section>
    </section>
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