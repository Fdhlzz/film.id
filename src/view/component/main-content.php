<?php
foreach ($datas as $data) :
?>
    <!-- Main Content Section -->
    <div class="p-10 bg-container rounded-md mb-10">
        <!-- Judul -->
        <div class="mb-1"><a href="detail/detail.php?id_film=<?= $data['id'] ?>" class="font-poppins text-putih font-bold text-xl transition ease-in-out delay-75 duration-100 hover:text-main hover:underline"><?= $data['judul'] ?> (2023)</a></div>
        <div class="flex items-center opacity-80 mb-5">
            <ion-icon class="text-main" name="time"></ion-icon>
            <p class="pl-2 font-poppins text-putih text-xs"><?= $data['tgl_upload'] ?></p>
        </div>
        <div class="flex">
            <!-- poster Section -->
            <a href="detail/detail.php" class="flex-shrink-0 w-20 md:w-60 mr-6 transition ease-in-out delay-75 duration-300 hover:translate-y-1 hover:scale-110 hover:opacity-80 cursor-pointer"><img class="aspect-2/3 rounded-md object-cover" src="<?= $data['poster'] ?>" alt=""></a>
            <!-- Poster Section -->
            <div class="md:pt-3 inline">
                <p class="text-sm font-poppins text-putih mb-1">
                    <?= mb_strimwidth($data['sinopsis'], 0, 200, "...") ?>
                </p>
                <a href="detail/detail.php?>" class="font-poppins text-main text-sm hover:underline">Lihat Selengkapnya...</a>
            </div>
        </div>
    </div>
<?php
endforeach;
?>