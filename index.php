<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 15/05/2017
 * Time: 12:50
 */
require_once "connect.php";
$sql = "select `id`, `prenom`, `nom` from `personne` where id = :id;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', 1);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($row);
