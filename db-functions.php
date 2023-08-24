<?php
$db = new PDO(
    'mysql:host=localhost;dbname=landing;charset=utf8',
    "root",
    ""
);
$landingStatement = $db->prepare('SELECT * FROM pricing');
$landingStatement->execute();
$landing = $landingStatement->fetchAll();

// This function allows for a change of name for the given option
function nameChange($name,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET nom_pricing = '$name' WHERE id_pricing = $id");
    $dbStatement->execute();
}
// This one is to change price
function priceChange($price,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET prix = '$price' WHERE id_pricing = $id");
    $dbStatement->execute();
}
// This one for the bandwidth
function bandwidthChange($bandwidth,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET bandwidth = '$bandwidth' WHERE id_pricing = $id");
    $dbStatement->execute();
}
// And this one for the onlinespace
function onlinespaceChange($onlinespace,$id){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    $dbStatement = $db->prepare("UPDATE pricing SET onlinespace = '$onlinespace' WHERE id_pricing = $id");
    $dbStatement->execute();
}