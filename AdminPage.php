<?php 
//parte la sessione
session_start();

$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "ps_db");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!--in questa pagina gli admin devono poter 
    cercare gli utenti e poter cambiare il loro
    livello di autorizzazione-->
    <div class="container-fluid">
    <form method="" action="">
    <input type="text" name="usernameSearch" id="usernameSearch" placeholder="Utente da cercare">
    <input type="submit" value="Cerca utente">
    </form>
    </div>

</body>

</html>