<?php

session_start();

$display = is_null(@$_GET['display']) ? "home" : @$_GET['display'];

include("config.php");

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_BASE);
if($conn->connect_error)
{
    die ("nie połączono <br /> Connect Error (". $mysqli->connect_errno .") ".$mysqli->connect_error);
}


$user = array
(
     'id_user' => NULL,
     'login' => NULL,
     'name' => NULL
);

if($display =="logoff")
	include ("logoff.php");

elseif(@$_SESSION['id_user'] )
{
     $SQL = "SELECT *
             FROM users
             WHERE id_user = ".$_SESSION['id_user'];
     $result = $conn->query($SQL);
     $row = $result->fetch_array();
     
     $user['id_user'] = $row['id_user'];
     $user['login'] = $row['login'];
     $user['name'] = $row['name'];
     
     $result->close();
}

echo'
<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Gra LAP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script> 
	<meta charset="UTF-8">
</head>
<body>
	<header>';
	if($user['id_user'] == NULL)
		echo '<a href="index.php?display=login" >Zaloguj</a>';
	else
		echo 'Witaj '.$user['name'].'! <a href="index.php?display=logoff" >Wyloguj</a>';
	echo'
	</header>
	<section>
		</div>
		<div id="content">';
			
			switch($display)
			{
				 case "login":
					  include ("login.php");
					  break;

				 case "home":
					  echo'<h2>Gra LAP - Strona główna</h2>'; 
					  break;

			}
			
			echo'
		</div>
	</section>
</body>
</html>
';



$conn->close();

?>