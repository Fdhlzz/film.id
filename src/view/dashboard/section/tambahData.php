<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="/src/css/style.css">
</head>

<body class="flex flex-row font-poppins bg-gray-200">
    <?php include '../../component/sidebar.php' ?>
    <main>
        <div class="m-5 p-5 bg-white rounded-md drop-shadow-sm">
            <h1 class="font-bold text-base mb-2">Tambah Data Film</h1>
            <hr class="w-auto mb-5">
            <form action="POST" class="flex flex-col">
                <section class="flex">
                    <label for="poster" class="mr-10">Poster</label>
                    <p class="mr-10">:</p>
                    <input type="file" name="poster" placeholder="Masukkan Username Anda..." class="text-sm mb-5">
                </section>
                <label for="password" class="mb-2">Password</label>
                <input type="password" name="password" placeholder="Masukkan Pasword Anda..." class="pl-5 pr-20 py-2 text-sm mb-5">
            </form>
        </div>
    </main>
</body>

</html>