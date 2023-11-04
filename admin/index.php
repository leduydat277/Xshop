<?php

include "controller/c_trang_chu.php";
$c_trang_chu = new C_trang_chu();

if (isset($_GET['ma_hang_hoa'])) {
    $ma_hang_hoa = $_GET['ma_hang_hoa'];
    $ma_loai = $_GET['ma_loai'];
    $c_trang_chu->chi_tiet_san_pham($ma_hang_hoa, $ma_loai);
    return;
}
if (isset($_GET['ma_loai'])) {
    $ma_loai = $_GET['ma_loai'];
    $c_trang_chu->hienthiloai($ma_loai);
    return;
}

$c_trang_chu->hienthimanhinh();
