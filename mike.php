<?php
// inclusion du fichier de connexion mysql PDO
require_once "connect.php";
// requete SQL simple, un SELECT
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
// premiere etape, le prepare
$stmt = $pdo->prepare($sql);
// deuxieme etape, le bind
// ici, pas de bind 😖
// troisieme etape, execution de la requete
$stmt->execute();
// quatrieme etape verification des erreurs
if($stmt->errorCode() !== '00000'){
    die($stmt->errorInfo()[2]);
}
//$row = $stmt->fetch(PDO::FETCH_OBJ);
//var_dump($row);
//echo $row->nom;
// etape final, le fetch, dans une boucle while
while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // affichage du contenu de la table
    echo $row['prenom']." ".$row['nom']." ".$row['adresse_email'].PHP_EOL;
}
