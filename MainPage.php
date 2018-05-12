<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PIANO STRATEGICO UNICAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="paginaPrincipale.css" >
</head>
<body>

  <!--Se l'utente è un amministratore-->

        <!--L'utente deve poter aggiungere, modificare o eliminare-->
      
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
                          <li><a href="#">Mostra il grafico della situazione</a></li>
                          <li><a href="AccountPage.php">Modifica account</a></li>
                          <li><a href="LoginPage.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
       
              <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
        <h2 align="center">Benvenuto <span class="user"><?= $_SESSION['username'] ?></h2></span>

        <p align="center"><img src="LogoUnicam.png" alt=""> </p>

     <div class="col-md-6 it-right-side pull-left">
                            <div>
                                <div class="col-md-12" id="dynamicInput">
                                    <!--Start Panel-->
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                        AREA STRATEGICA
                                                        <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                <form method="post">
                                                <input class="center-block" type="text"  name="area-strategica"/>
                                                <button type="button" class="btn center-block" onClick="addInput('collapse1');"><i class="fa fa-plus"></i> Aggiungi area strategica </button>
                                        </form>
                                        
                                                </div>
                                            </div>
                                          
                                        </div>
                                       
                                    </div>
                                </div>
                                <!--End panel-->

                                </div>
                            </div>
  
     
                            <script type="text/javascript">
    var counter = 1;
   
    function addInput(divName) {
      
            newdiv = '<div class="panel panel-body">' +
                    '<h4 class="panel-title">' +
                    '<a data-toggle="collapse" data-parent="#collapse" href=""' + (counter + 1) + '">Day ' + (counter + 1) + '<i class="fa fa-plus pull-right" aria-hidden="true"></i></a></h4>' +
                    '</div> ' ;
                    

            $("#" + divName).append(newdiv);
            counter++;
        
    }
  </script>  
     
     

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>

</body>
</html>