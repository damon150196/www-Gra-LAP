<?php

if(@$_SESSION['id_user'])
{
	echo'
		<article>1. PH
		</br>
		2. PH
		</br>
		3. PH
		</br>
		4. PH
		</br>
		<article>
		<button>Akceptuje</button>
		<button onclick="style.display=hidden">Chce uciec</button>
		';
}
else
	header("Location: index.php");
?>