<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 22/05/2017
 * Time: 14:42
 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=1A4-mdr','root', 'root');
    $pdo->exec('SET NAMES UTF8;');
} catch(PDOException $exception){
//    die($exception->getMessage());
    die("revenez plus tard, le sysadmin dort.");
}
