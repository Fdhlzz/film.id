<?php

require '../../../../databases/query.php';

$datas = tampilkanData('SELECT * FROM data')
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

<body class="flex flex-row font-poppins bg-gray-200 text-xs">
    <?php include '../../component/sidebar.php' ?>
    <main>
        <div class="m-5 p-5 bg-white rounded-md drop-shadow-sm">
            <h1 class="font-bold text-base mb-2">Data Table Film</h1>
            <hr class="w-auto mb-5">
            <div class="flex justify-between items-center mb-3">
                <a href="../section/tambahData.php" class="flex items-center px-3 py-2 font-bold bg-green-500 rounded-sm">
                    <span class="material-symbols-outlined text-sm text-putihDash font-bold mr-2">
                        add
                    </span>
                    <p class="text-putihDash">Tambah Data</p>
                </a>
                <div class="flex items-center pr-3 bg-gray-200 rounded-sm">
                    <span class="material-symbols-outlined text-sm font-bold px-3 py-2">
                        search
                    </span>
                    <input type="text" class="bg-gray-200 border-0 focus:outline-none" placeholder="Cari Data...">
                </div>
            </div>
            <table class="table-fixed">
                <thead>
                    <tr>
                        <th class="p-2 border-2">No.</th>
                        <th class="p-2 border-2">Poster</th>
                        <th class="p-2 border-2">Judul</th>
                        <th class="p-2 border-2">Genre</th>
                        <th class="p-2 border-2">Tanggal Rilis</th>
                        <th class="p-2 border-2">Pemain</th>
                        <th class="p-2 border-2">Durasi</th>
                        <th class="p-2 border-2">Sutradara</th>
                        <th class="p-2 border-2">Sinopsis</th>
                        <th class="p-2 border-2">Kode Trailer</th>
                        <th class="p-2 border-2">Tanggal upload</th>
                        <th class="p-2 border-2">Rating</th>
                        <th class="p-2 border-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 0;
                    foreach ($datas as $data) :
                        $nomor++;
                    ?>
                        <tr class="border-2">
                            <td class="align-top p-2 border-2 text-center"><?= $nomor ?></td>
                            <td class="p-2 border-2">
                                <img src="<?= $data['poster'] ?>" alt="">
                            </td>
                            <td class="align-top p-2 border-2"><?= $data['judul'] ?></td>
                            <td class="align-top p-2 border-2"><?= $data['genre'] ?></td>
                            <td class="align-top p-2 border-2"><?= $data['tgl_rilis'] ?></td>
                            <td class="align-top p-2 border-2"><?= $data['pemain'] ?></td>
                            <td class="align-top p-2 border-2"><?= $data['durasi'] ?></td>
                            <td class="align-top p-2 border-2"><?= $data['sutradara'] ?></td>
                            <td class="align-top p-2 border-2"><?= mb_strimwidth($data['sinopsis'], 0, 100, "...") ?></td>
                            <td class="align-top p-2 border-2"><?= $data['trailer'] ?></td>
                            <td class="align-top p-2 border-2"><?= $data['tgl_upload'] ?></td>
                            <td class="align-top p-2 border-2"><?= $data['rating'] ?></td>
                            <td class="align-middle text-center border-2">
                                <button class="px-2 py-1 font-bold bg-mainDash rounded-sm mb-3 ">
                                    <span class="material-symbols-outlined text-sm text-putihDash font-bold">
                                        edit
                                    </span>
                                </button>
                                <button class="px-2 py-1 font-bold bg-red-500 rounded-sm">
                                    <span class="material-symbols-outlined text-sm text-putihDash font-bold">
                                        Delete
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>