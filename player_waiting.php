<?php

if(@$_SESSION['id_user'])
{
	echo'
		<label>Oczekuje na drugiego gracza...</label>
		';
}
else
	header("Location: index.php");
?>