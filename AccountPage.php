<?php
// Start the session
session_start();


?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="PaginaAccount.css">
</head>
<body>
    <!--L'utente deve poter:
    Modificare la password,
    Modificare l'email o il nome utente,
    Eliminare l'account.
    -->

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img alt="Brand" src="LogoUnicam.png" height="35px" width="85px"></a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           
            <ul class="nav navbar-nav navbar-right">
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="MainPage.php">Home page</a></li>
              
                  <li><a href="LoginPage.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<p align="center"><img src="LogoUnicam.png" alt=""> </p>
<!--Comparirà il nome dell'utente loggato.-->
    <h2>Account di <?php echo $_SESSION['name']; ?> </h2>

<form action="">
   <div>
      <input type="text" name="username" id="username" />
      <label for="username">Change Email Address</label>

      <input type="submit" name="change-email-submit" id="change-email-submit" value="Change Email" class="button" />
   </div>
</form>

<hr />

<h2>Change Password</h2>

<form action="#">
   <div>
      <label for="password">New Password</label>
      <input type="password" name="r" id="new-password" />

      <label for="password">Repeat New Password</label>
      <input type="password" name="r" id="repeat-new-password" />
      <input type="submit" name="change-password-submit" id="change-password-submit" value="Change Password" class="button" />
   </div>
</form>

<hr />

<form action="" id="delete-account-form">
    <div>
        <input type="submit" name="delete-account-submit" id="delete-account-submit" value="Delete Account?" class="button" />
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>