<?php
$db = new PDO(
    'mysql:host=localhost;dbname=landing;charset=utf8',
    "root",
    ""
);
$landingStatement = $db->prepare('SELECT * FROM pricing');
$landingStatement->execute();
$landing = $landingStatement->fetchAll();


function nameChange($name,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET nom_pricing = '$name' WHERE id_pricing = $id");
    $dbStatement->execute();
}
function priceChange($price,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET prix = '$price' WHERE id_pricing = $id");
    $dbStatement->execute();
}
function bandwidthChange($bandwidth,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET bandwidth = '$bandwidth' WHERE id_pricing = $id");
    $dbStatement->execute();
}
function onlinespaceChange($onlinespace,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET onlinespace = '$onlinespace' WHERE id_pricing = $id");
    $dbStatement->execute();
}