<?php
session_start();
require("db-functions.php");
if(isset($_POST['submit'])){
    
    $name = filter_input(INPUT_POST, "name");
    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $bandwidth = filter_input(INPUT_POST, "bandwidth", FILTER_VALIDATE_INT);
    $onlinespace = filter_input(INPUT_POST, "onlinespace", FILTER_VALIDATE_INT);
    $support = filter_input(INPUT_POST, "support", FILTER_VALIDATE_INT);
    $domain = filter_input(INPUT_POST, "domain", FILTER_VALIDATE_INT);
    $hiddenfees = filter_input(INPUT_POST, "hiddenfees", FILTER_VALIDATE_INT);
    $sale = 0;
    if($name && $price && $bandwidth && $onlinespace && $domain){
        $pricing = [
            "name" => $name,
            "price" => $price,
            "sale" => $sale,
            "bandwidth" => $bandwidth,
            "onlinespace" => $onlinespace,
            "support" => $support,
            "domain" => $domain,
            "hiddenfees" => $hiddenfees
        ];
        $_SESSION['pricing'][] = $pricing;
        nameChange($pricing["name"],$_GET["id"]);
        priceChange($pricing["price"],$_GET["id"]);
        bandwidthChange($pricing["bandwidth"],$_GET["id"]);
        onlinespaceChange($pricing["onlinespace"],$_GET["id"]);
        domainChange($pricing["domain"],$_GET["id"]);
    }
}
header("Location:admin.php");