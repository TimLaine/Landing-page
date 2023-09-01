<?php
function database(){
    $db = new PDO(
        'mysql:host=localhost;dbname=landing;charset=utf8',
        "root",
        ""
    );
    return $db;
}
$landingStatement = database()->prepare('SELECT * FROM pricing');
$landingStatement->execute();
$landing = $landingStatement->fetchAll();
$iEmail = 0;


// This function allows for a change of name for the given option
function nameChange($name,$id){
    $dbStatement = database()->prepare("UPDATE pricing SET nom_pricing = '$name' WHERE id_pricing = $id");
    $dbStatement->execute();
}
// This one is to change price
function priceChange($price,$id){
    $dbStatement = database()->prepare("UPDATE pricing SET prix = '$price' WHERE id_pricing = $id");
    $dbStatement->execute();
}
// This one for the bandwidth
function bandwidthChange($bandwidth,$id){
    $dbStatement = database()->prepare("UPDATE pricing SET bandwidth = '$bandwidth' WHERE id_pricing = $id");
    $dbStatement->execute();
}
// This one for the domains
function domainChange($domain,$id){
    $dbStatement = database()->prepare("UPDATE pricing SET domain = '$domain' WHERE id_pricing = $id");
    $dbStatement->execute();
}
// And this one for the onlinespace
function onlinespaceChange($onlinespace,$id){
    $dbStatement = database()->prepare("UPDATE pricing SET onlinespace = '$onlinespace' WHERE id_pricing = $id");
    $dbStatement->execute();
}
function saleUp($id){
    $dbStatement = database()->prepare("UPDATE pricing SET nb_ventes = nb_ventes+1 WHERE id_pricing = $id");
    $dbStatement->execute();
}
function email($email){
    $dbStatement = database()->prepare("INSERT INTO email (email)
    VALUES ('$email')");
    $dbStatement->execute();
}