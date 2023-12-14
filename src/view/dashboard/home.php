<?php

require '../../../databases/query.php';

$data = data("SELECT COUNT(*) as jumlah FROM data");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="/src/css/style.css">
</head>

<body class="flex flex-row font-poppins bg-gray-200">
    <?php include '../component/sidebar.php' ?>
    <div class="">
        <h1 class="font-bold m-5">Halo, Admin</h1>
        <div class="ml-5 mt-5 bg-white rounded-lg drop-shadow-sm p-10">
            HALO, TOTAL : <?= $data["jumlah"] ?>
        </div>
    </div>

</body>

</html>