<?php

include("utils.php");

$api = get("/");
//var_dump($api);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    echo "Nom : " . $api->name;
    echo "<br>";
    echo "Description : " . $api->description;

    echo "Liste des pages :<br>";
    $liste = get("/wp/v2/pages");
    foreach($liste as $page) {
        echo "Page id=" . $page->id . " : " . $page->slug . "<br>";
    }

    // liste des articles
    // docs api reference https://developer.wordpress.org/rest-api/reference/ : comment trier les articles ?

    // créer une page blog.php qui affiche les posts complets
    ?>
    </div>
</body>
</html>
