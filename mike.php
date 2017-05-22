<?php
require_once "connect.php";
$sql = "SELECT
  `id`,
  `prenom`,
  `nom`,
  genre,
  `adresse_email`
FROM
  `personne`
WHERE
  1
";
$stmt = $pdo->prepare($sql);
// pas de bind
$stmt->execute();
if($stmt->errorCode() !== '00000'){
    die($stmt->errorInfo()[2]);
}
//$row = $stmt->fetch(PDO::FETCH_OBJ);
//var_dump($row);
//echo $row->nom;
while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['prenom']." ".$row['nom']." ".$row['adresse_email'].PHP_EOL;
}
