<link rel="stylesheet" href="style.css">
<?php
require('./connection.php');

$sql = $con->prepare("select * from users");
$sql->execute();

//user count
$collection = $sql->fetchAll(PDO::FETCH_ASSOC);
require('./data_view.php');
