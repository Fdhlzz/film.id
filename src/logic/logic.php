<?php

require '../../databases/query.php';

$datas = tampilkanData("SELECT * FROM data ORDER BY tgl_upload DESC");


