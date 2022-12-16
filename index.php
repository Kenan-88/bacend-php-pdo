
<?php 
//Connect to database
$pdo = new PDO('mysql:host=localhost;dbname=php-pdo-crud-proeftoets', 'root', '');

//Query and sort by networth desc
$stmt = $pdo->query("SELECT * FROM richestpeople ORDER BY networth DESC");

//Fetch the result
$richestpeople = $stmt->fetchAll("age");

?>

 