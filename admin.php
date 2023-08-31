<?php
session_start();
require("db-functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="CSS/styleadmin.css">
</head>
<body>
    <section id="layout">
                <div id="title">
                    <h1>Update Pricing</h1>
                </div>
                <div id="cards">
                    <?php 
                    foreach($landing as $pricing){
                        $price = $pricing["prix"] * (1-($pricing["reduction"]/100));
                        $onlineSpace = $pricing["onlinespace"];
                        $onlineSpaceUnit = "MB";
                        if($pricing["onlinespace"] >= 1000){
                            $onlineSpaceUnit = "GB";
                            $onlineSpace = $onlineSpace/1000;
                        }                        
                        $domain = $pricing["domain"];
                        if($domain == 0){
                            $domain = "Unlimited";
                        }
                        $support = ($pricing["support"]) ? "Yes" : "No";
                        $HiddenFees = ($pricing["hidden_fees"]) ? "Yes" : "No";
                        ?>
                        <div class="card">                        
                            <form action="traitement-admin.php?id=<?= $pricing["id_pricing"] ?>" method="post">
                                <div class="options">
                                    <label>
                                        Name
                                    </label>
                                    <input type="text" step="any" name="name"
                                    value="<?= $pricing["nom_pricing"] ?>">
                                </div>
                                <div class="options">
                                    <label>
                                        Price
                                    </label>
                                    <input type="number" step="any" name="price"
                                    value="<?= $pricing["prix"] ?>">
                                </div>
                                <div class="options">
                                    <label>
                                        Sale
                                    </label>
                                    <input type="number" name="sale" value="<?= $pricing["reduction"] ?>">
                                </div>
                                <div class="options">
                                    <label>
                                        Bandwidth
                                    </label>
                                    <input type="number" step="any" name="bandwidth" value="<?= $pricing["bandwidth"] ?>">
                                </div>
                                <div class="options">
                                    <label>
                                        Onlinespace
                                    </label>
                                    <input type="number" step="any" name="onlinespace" value="<?= $pricing["onlinespace"] ?>">
                                </div>
                                <div class="options">
                                    <label>
                                        Support
                                    </label>
                                    <input type="text" step="any" name="support" value="<?= $support ?>">
                                </div>
                                <div class="options">
                                    <label>
                                        Domain
                                    </label>
                                    <input type="number" step="any" name="domain" value="<?= $pricing["domain"] ?>">
                                </div>
                                <div class="options">
                                    <label>
                                        Hidden Fees
                                    </label>
                                    <input type="text" step="any" name="hiddenfees" value="<?= $HiddenFees ?>">
                                </div>
                                <div class="button">
                                    <input type="submit" name="submit" value="Update">
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
    </section>
</body>
</html>