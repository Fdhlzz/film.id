<?php
// include '../logic/logic.php';
include '../logic/logic.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Film.id</title>
  <link rel="stylesheet" href="/src/css/style.css">
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
</style>

<body class="bg-bgcolor">
  <!-- Navbar Section -->
  <?php require_once('component/navbar.php'); ?>
  <!-- Navbar Section -->
  <div class="m-10">
    <div class="flex flex-col md:flex-row justify-between">

      <div>
        <!-- Main Content Section -->
        <?php include 'component/main-content.php' ?>
        <!-- Main Content Section -->
        <div class="p-10 font-poppins text-putih bg-container rounded-md mb-10 flex justify-between items-center">
          <div class="flex">
            <p class="ml-3">Sebelumnya</p>
            <p class="ml-3">1</p>
            <p>2</p>
            <p>3</p>
            <p>Selanjutnya</p>
          </div>
          <div class="">
            <p>total halaman</p>
          </div>
        </div>
      </div>
      <!-- Pagination Section -->
      <!-- Populer Content -->
      <div class="flex flex-col md:ml-10 md:mb-0">
        <div class="mb-5 flex justify-end md:justify-start font-poppins font-black text-main text-2xl">Populer</div>
        <div class=" p-10 bg-container  rounded-md md:items-center">
          <div class="flex md:flex-col-reverse  md:items-center mb-10">
            <a href="detail/detail.php" class="flex-shrink-0 w-20 md:w-32 mr-5 ease-in-out delay-75 duration-300 hover:translate-y-1 hover:scale-110 hover:opacity-80"><img class="mr-3 aspect-2/3 rounded-md  object-cover" src="/src/img/poster-1.svg" alt=""></a>
            <div class="">
              <div class="font-poppins text-putih font-bold md:mb-1"><a href="detail/detail.php" class="transition ease-in-out delay-75 duration-100 hover:underline hover:text-main">A HAUNTING IN VENICE (2023)</a></div>
              <div class="flex items-center opacity-80 mb-5">
                <ion-icon class="text-main" name="time"></ion-icon>
                <p class="pl-2 font-poppins text-putih text-xs">21 Jan 2023, 21:00</p>
              </div>
            </div>
          </div>
          <hr class="border-bgcolor border-2">
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Section -->
  <?php require_once('component/footer.php'); ?>
  <!-- Footer Section -->
</body>

</html>