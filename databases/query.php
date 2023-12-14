<?php
require 'koneksi.php';


function data($query)
{
    global $koneksi;
    $db = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($db);

    return $data;

    $koneksi->close();
}


function tampilkanData($query)
{
    global $koneksi;
    $db = mysqli_query($koneksi, $query);
    $datas = [];

    while ($data = mysqli_fetch_assoc($db)) {
        $datas[] = $data;
    }

    return $datas;

    $koneksi->close();
}

function cariData()
{
    $keyword = $_GET['judul'];

    $query = "SELECT FROM data WHERE judul LIKE '%$keyword%'";

    return tampilkanData($query);
}

function detail()
{
    global $koneksi;
    $id = $_GET['id_film'];
    $query = "SELECT * FROM data WHERE id = $id";
    $db = mysqli_query($koneksi, $query);
    $data_detail = mysqli_fetch_assoc($db);

    return $data_detail;

    $koneksi->close();
}

function tambahData()
{
}
