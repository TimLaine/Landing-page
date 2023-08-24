<?php
session_start();
$db = new PDO(
    'mysql:host=localhost;dbname=landing;charset=utf8',
    "root",
    ""
);
$landingStatement = $db->prepare('SELECT * FROM pricing');
$landingStatement->execute();
$landing = $landingStatement->fetchAll();

$_SESSION['landing'][] = $landing;