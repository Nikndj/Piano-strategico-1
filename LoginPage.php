<?php
// Start the session
session_start();

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

        
        <body class="text-center">
            
                <form class="form-signin" action="MainPage.php" method="post">
                        <img class="mb-4" src="LogoUnicam.png" alt="">
                  <h1 class="h3 mb-3 font-weight-normal">Effettua il login</h1>
                  <label for="inputUserName" class="sr-only">Username</label>
                  <input id="inputUserName" name="name" class="form-control" placeholder="Username" required="" autofocus="" type="username">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
                  <div class="checkbox mb-3">
                    <label>
                      <input value="remember-me" type="checkbox">Ricordami
                    </label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Accedi</button>
                  <p class="mt-5 mb-3 text-muted">Copyright 2015-2018 @ Università degli Studi di Camerino</p>
                  <a href=""><u> Non sei registrato?</u></a>
                </form>
              
            
            </body>
    

</html>