
<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "ps_db");

//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
        //set all the post variables
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']); //md5 has password for security
    
        
        
                
                //set session variables
                $_SESSION['username'] = $username;
               

                //insert user data into database
                $sql = "INSERT INTO users (Username, Email, Password) "
                        . "VALUES ('$username', '$email', '$password')";
                
                //if the query is successsful, redirect to welcome.php page, done!
                if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registrazione avvenuta con successo! Aggiunto $username al database!";
                    header("location: MainPage.php");
                }
                else {
                    $_SESSION['message'] = 'Errore nella registrazione';
                }
                $mysqli->close();          
           
        
    }
    else {
        $_SESSION['message'] = 'Le due password non combaciano!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>RegisterPage</title>
	<link rel="stylesheet" type="text/css" href="RegisterPage.css">
	<link rel="stylesheet" type="text/css" href="form/form.css">
</head>
<body>
  <div class="header">
  	<h2>Registrati</h2>
  </div>
	
	<form action="RegisterPage.php" method="post" enctype="multipart/form-data" autocomplete="off">
	<img src="LogoUnicam.png" alt="">
	<div class="input-group">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input class="input-group input" type="text" placeholder="Username" name="username" required />
      <input class="input-group input" type="email" placeholder="Email" name="email" required />
      <input class="input-group input" type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input class="input-group input" type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
			<input  type="submit" value="Registrati" name="register" class="btn btn-block btn-primary" />
</div>
  	<p>
  		<i>Sei già registrato? </i><a href="LoginPage.php"><i>Effetua il log in</i></a>
  	</p>
  </form>
</body>
</html>
