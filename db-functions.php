<?php
$db = new PDO(
    'mysql:host=localhost;dbname=landing;charset=utf8',
    "root",
    ""
);
$landingStatement = $db->prepare('SELECT * FROM pricing');
$landingStatement->execute();
$landing = $landingStatement->fetchAll();

foreach($landing as $pricing){
    $price = $pricing["prix"] * (1-($pricing["nb_ventes"]/100));
    $onlineSpace = $pricing["onlinespace"];
    $onlineSpaceUnit = "MB";
    if($pricing["onlinespace"] >= 1000){
        $onlineSpaceUnit = "GB";
        $onlineSpace = $onlineSpace/1000;
    }

    $support = ($pricing["support"]) ? "Yes" : "No";
    $HiddenFees = ($pricing["hiddenfees"]) ? "Yes" : "No";
    $SupportMark = ($pricing["support"]) ? "fa-circle-check" : "fa-regular fa-circle-xmark";
    $HiddenFeesMark = ($pricing["hiddenfees"]) ? "fa-circle-check" : "fa-regular fa-circle-xmark";
}