<?php
session_start(); // starts php session which is used for user authorization

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Request a Game</title>
        <link rel="icon" type="image/x-icon" href="./favicon.ico"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="homepage.css"> 
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <style>
            h1 {
                margin: 40px;
                font-size: 300%;
            }

            p {
                margin: 20px;
                font-size: large;
            }

            a:link {
                color:blueviolet;
            }

            a:visited {
                color:#7f5af0;
            }
            a:hover {
                color:red
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7f5af0;">
        <a class="navbar-brand" href="./home.php"><img src="logo.png" alt="Game Critix" height="75px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./allGames.php?page=1">All Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./consoleLinks.php">Sort By Console</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./aboutUs.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./requestGame.php">Request Game</a>
                </li>
            </ul>
            <form class="form-inline w-50 my-2 " action="./search.php">
                <label for="searchterm" style="color: white"><b>Search:&emsp;</b> </label><input class="form-control w-50 mr-sm-2" id="searchterm" name="searchterm" type="text" placeholder="Type Here">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
            <?php
            // These conditions check for if the session user_id is set indicating a user a logged in, when the user is logged in, show a logout button otherwise a login button
            if ( isset( $_SESSION['user_id'] ) ) {
                echo "<a class=\"btn btn-danger\" id='login' href=\"./logout.php\">Logout</a>";
            }else{
                echo "<a class=\"btn btn-dark\" id='login' href=\"./loginPage.php\">Login</a>";
            }

            ?>
        </div>
    </nav>

        <br>
        <h1>Request a Game</h1>
        <p>
            If there is a game missing in our database, then please fill out the following form and we will do our best to add it
        </p>
        <br>
        <form style="width: 70%; margin: 0 auto;" action="./submitGameRequest.php" method="post">
            <label for="GameName">Game Name: </label>
            <input id="GameName" name="GameName" type="text" class="form-control" placeholder="Game Name" required >
            <br>
            <label for="LinkToGame">Please Provide a Link to the Game so we may Verify it: </label>
            <input id="GameName" name="GameUrl" type="text" class="form-control" placeholder="Game Url" required >
            <br>
            <div class="text-center">
                <button type="submit" id="GameWidget" style="box-shadow: none; text-align: center;">Submit</button>
            </div>
        </form>
    </body>
</html>