<?php
session_start();
$ma_khach_hang = $_SESSION['id'];
include "controller/c_dat_hang.php";
$c_dat_hang = new C_dat_hang();
include("controller/c_gio_hang.php");
$c_gio_hang = new C_gio_hang();
if (isset($_GET['id_gio_hang'])) {
    $id_gio_hang = $_GET['id_gio_hang'];
    $gh_id2 = $c_gio_hang->gio_hang_by_id($id_gio_hang);
}

if ($_POST['action'] == 'select_huyen') {

    $id_tinh = $_POST['id_tinh'];
    $huyen_list = $c_dat_hang->select_huyen($id_tinh);
    echo json_encode($huyen_list);
    return;
}
if ($_POST['action'] == 'select_phuong_xa') {

    $id_quan_huyen = $_POST['id_quan_huyen'];
    $phuong_xa_list = $c_dat_hang->select_phuong_xa($id_quan_huyen);
    echo json_encode($phuong_xa_list);
    return;
}
if ($_POST['action'] == 'dat_dia_chi') {
    $dia_chi_cu_the = $c_dat_hang->dia_chi($_POST);
    //var_dump($dia_chi_cu_the);
    echo json_encode($dia_chi_cu_the);
    return;
}
if ($_POST['action'] == 'luu') {
    echo 1;
    return;
    $luu_don_hang = $c_dat_hang->don_hang($gh_id2, $_POST);
    var_dump($_POST);
    return;
}





$c_dat_hang->hienthi();
