<?php
session_start();
$ma_khach_hang = $_SESSION['id'];

include "controller/c_binh_luan.php";
$c_binh_luan = new C_binh_luan();

if (isset($_GET['ma_hang_hoa'])) {
    $ma_hang_hoa = $_GET['ma_hang_hoa'];
    $c_binh_luan->hien_thi_chi_tiet_binh_luan($ma_hang_hoa);
    return;
}

if (isset($_POST['action']) && $_POST['action'] === 'create') {
    $res =   $c_binh_luan->binh_luan($_POST, $ma_khach_hang);
    echo (json_encode($res));
    return;
}
if (isset($_POST['action2']) && $_POST['action2'] === 'create') {
    $c_binh_luan->binh_luan_hang_hoa($_POST);
    return;
}


$c_binh_luan->hienthimanhinh();
return;
