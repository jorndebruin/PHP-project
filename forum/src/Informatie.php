<!DOCTYPE html>
<html xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP forum</title>
    <link rel="stylesheet" href="../design/forum.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body background="../src/images/achtergrond%20auto's.jpg">

<nav class="navbar navbar-inverse">
    <section class="container-fluid">
        <section class="navbar-header">
            <a class="navbar-brand" href="home.php">Forum.nl</a>
        </section>
        <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="Informatie.php">Informatie</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="home.php">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container">
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit">Sign up</button>
                            <input type="checkbox" checked="checked"> Remember me
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </form>
                </div>
            </li>


            <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="home.php">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container">
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit">Login</button>
                            <input type="checkbox" checked="checked"> Remember me
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </section>
</nav>

<section class="container-fluid text-center">
    <section class="row content">
        <section class="col-sm-2 sidenav">
            <h2><a href="#">   </a></h2>
            <h2><a href="#">   </a></h2>
            <h2><a href="#">   </a></h2>
        </section>
        <section class="col-sm-8 text-left">

            <h1>Informatie</h1><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel rutrum erat.
                Donec fermentum dui quis suscipit interdum. Class aptent taciti sociosqu ad litora
                torquent per conubia nostra, per inceptos himenaeos. Duis eget lacus sagittis,
                cursus nisi non, cursus leo. Ut semper porta tellus. Aliquam a dictum ante, dictum
                hendrerit massa. Suspendisse ut consequat mi. Maecenas tempor id dui ut suscipit.

                Proin neque metus, vestibulum ac arcu scelerisque, aliquet sodales risus. In eget
                ex tellus. Cras tempus, mi sit amet vestibulum blandit, nunc libero pharetra est,
                non accumsan tortor orci vitae lectus. In id lorem velit. Etiam sit amet luctus felis.
                Cras orci purus, pulvinar vitae odio rhoncus, lacinia imperdiet nisi. Donec in
                ornare velit. Sed non suscipit magna. Quisque ultrices quis metus quis accumsan.
                Sed tortor dolor, tristique eu elementum vel, eleifend ullamcorper magna. Proin
                tincidunt dolor et lobortis accumsan. Sed at ullamcorper neque. Pellentesque
                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Donec velit leo, viverra non consectetur vel, scelerisque vel nibh.

                Duis urna arcu, bibendum eget risus a, bibendum cursus enim. Donec et tellus vitae
                lorem blandit molestie quis eget eros. Nam urna sapien, tincidunt vel dapibus vitae,
                ultricies et elit. Curabitur gravida risus in finibus tempus. Nunc et erat ultrices,
                efficitur libero at, venenatis ligula. Vivamus imperdiet nulla felis, sit amet hendrerit
                mauris cursus sed. Pellentesque varius vestibulum malesuada. In sed purus mattis, tempus
                odio sed, porta felis. Morbi faucibus condimentum urna eu condimentum. Donec elementum,
                nisl eget elementum fringilla, sapien est accumsan lectus, vel tempor libero justo et velit.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
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