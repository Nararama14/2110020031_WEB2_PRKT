<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hello Nama dan NIM</title>
</head>

<body>
    <h1>Selamat datang di web <?= $nama ?>, NPM <?= $NPM ?> </h1>
    <?php
    if (isset($mvc, $nama, $NPM)) {
        echo $mvc, $nama, $NPM;
    }
    ?>
</body>

</html>