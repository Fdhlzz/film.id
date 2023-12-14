<?php



?>


<!-- Start Navbar Section -->
<nav class="bg-container rounded-md m-10 p-5 md:p-10 md:flex md:justify-between items-center">
    <div class="flex justify-between items-center">
        <a href="/src/view/index.php" class="font-poppins font-black text-main text-4xl">Film.id</a>
    </div>
    <div class="relative mt-5 md:mt-0">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <ion-icon name="search" class="text-gray-500"></ion-icon>
        </div>
        <form action="" method="POST">
            <input type="text" id="data" name="data" class="bg-bgcolor font-poppins  block w-full rounded-sm border-0 py-2 pl-9 pr-20 text-gray-300 placeholder:text-gray-400 focus:outline-none " placeholder="Cari Judul Film...">
            <a href="navbar.php?judul_film=<?= $keyword ?>" id="submit" name="cari" hidden>test</a>
        </form>
    </div>
    <!-- <ul class="mt-10 md:mt-0 md:flex hidden flex-col-reverse md:flex-row md:items-center ">
        <li class="font-poppins font-bold text-putih transition ease-in-out delay-75 duration-100 hover:underline hover:text-main cursor-pointer md:mb-0"><a href="#">Genre</a></li>
        <li class="font-poppins font-bold text-putih transition ease-in-out delay-75 duration-100 hover:underline hover:text-main cursor-pointer mb-5 md:mb-0 md:ml-10"><a href="#">Negara</a></li>
        <li class="font-poppins md:ml-10">
        </li>
    </ul> -->
</nav>

<script src="/src/js/script.js"></script>