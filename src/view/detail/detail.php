<?php
require '../../../databases/query.php';
$detail = detail();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film.id</title>
    <link rel="stylesheet" href="/src/css/style.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="bg-bgcolor">
    <!-- Navbar Section -->
    <?php require_once('../component/navbar.php'); ?>
    <!-- Navbar Section -->

    <!-- Judul Section -->
    <input type="hidden" name="id" value="<?= $detail['id'] ?>">
    <div class="flex flex-col m-10 font-poppins">
        <div class="mb-10">
            <div class="flex items-center">
                <div class="">
                    <a href="../index.php"><ion-icon name="arrow-round-back" class="text-putih text-4xl mr-5 transition ease-in-out delay-75 duration-150 hover:text-main hover:scale-125"></ion-icon></a>
                </div>
                <div class="flex flex-col">
                    <h1 class="text-putih font-black text-xl mb-2"><?= $detail['judul'] ?></h1>
                    <div class="flex items-center opacity-80">
                        <ion-icon class="text-main" name="time"></ion-icon>
                        <p class="pl-2 font-poppins text-putih text-xs"><?= $detail['tgl_upload'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Judul Section -->

        <!-- Desc Section -->
        <div class="flex items-start bg-container p-10 mb-10">
            <!-- image section -->
            <img src="<?= $detail['poster'] ?>" alt="" class="flex-shrink-0 aspect-2/3 object-cover rounded-md w-32 md:w-60 mr-6">
            <!-- image section -->
            <div class="flex flex-col text-putih text-sm md:text-base">
                <div class="flex flex-col md:flex-row mb-2">
                    <h1 class="font-bold md:w-40 flex-shrink-0 md:mr-3">Genre</h1>
                    <p class="opacity-75"><?= $detail['genre'] ?></p>
                </div>
                <div class="flex flex-col md:flex-row mb-2">
                    <h1 class="font-bold md:w-40 flex-shrink-0 md:mr-3">Tanggal Rilis</h1>
                    <p class="opacity-75"><?= $detail['tgl_rilis'] ?></p>
                </div>
                <div class="flex flex-col md:flex-row mb-2">
                    <h1 class="font-bold md:w-40 flex-shrink-0 md:mr-3">Pemain</h1>
                    <p class="opacity-75"><?= $detail['pemain'] ?></p>
                </div>
                <div class="flex flex-col md:flex-row mb-2">
                    <h1 class="font-bold md:w-40 flex-shrink-0 md:mr-3">Durasi</h1>
                    <p class="opacity-75"><?= $detail['durasi'] ?></p>
                </div>
                <div class="flex flex-col md:flex-row">
                    <h1 class="font-bold md:w-40 flex-shrink-0 md:mr-3">Sutradara</h1>
                    <p class="opacity-75"><?= $detail['sutradara'] ?></p>
                </div>
            </div>
        </div>
        <!-- Desc Section -->

        <!-- sinopsis Section -->
        <h1 class=" text-putih font-black text-xl mb-5">Sinopsis</h1>
        <div class="flex flex-col bg-container p-10 mb-10">
            <p class="text-putih text-sm md:text-base"><?= $detail['sinopsis'] ?></p>
        </div>
        <!-- Sinopsis Section -->

        <!-- Trailer Section -->
        <h1 class="text-putih font-black text-xl mb-5">Trailer</h1>
        <iframe src="https://www.youtube.com/embed/<?= $detail['trailer'] ?>" frameborder="0" class="aspect-video rounded-md" allowfullscreen></iframe>
        <!-- Trailer Section -->
    </div>
    </div>
    </div>
</body>

</html>