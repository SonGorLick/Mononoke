<?php

// pages/anime.req.php - Mononoke

$id = $_GET["id"];
$anime = $conn->query("SELECT * FROM `anime` WHERE `id`='$id' LIMIT 1");
$anime = mysqli_fetch_assoc($anime);

?>

<title><?= $anime["name"] ?> (<?= $lang["anime"]["anime"] ?>) | <?= $config["name"] ?></title>