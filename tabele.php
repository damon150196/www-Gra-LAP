<?php

include("config.php");

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_BASE);
if($conn->connect_error)
{
    die ("nie połączono <br />  ect Error (". $mysqli-> ect_errno .") ".$mysqli-> ect_error);
}


$SQL="
create table USERS 
(
    id_user int not null primary key auto_increment,
    login varchar(64) not null,
    name varchar(64) not null
);";
$conn->query($SQL) or die(mysqli_error($conn));


$SQL="
create table TABLES
(
    id_table int not null primary key auto_increment,
    id_player1 int not null,
	id_player2 int not null,
	token int not null
);";
$conn->query($SQL) or die(mysqli_error($conn));

$SQL="
INSERT INTO USERS (`login`, `name`)
VALUES
('user1', 'Użytkownik1'),
('user2', 'Użytkownik2')
";
$conn->query($SQL) or die(mysqli_error($conn));


echo '<h2>Udało się</h2>';

$conn->close();

?>
