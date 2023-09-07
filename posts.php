<link rel="stylesheet" href="style.css">

<?php
require('./connection.php');
$sql = "select * from `posts`";
$query = $con->prepare($sql);
$query->execute();
$collection = $query->fetchAll(PDO::FETCH_ASSOC);
require('./data_view.php');
