<?php

session_start();
// $ma_khach_hang = $_SESSION['id'];
$ma_khach_hang = $_SESSION['id'];
include("controller/c_gio_hang.php");
$c_gio_hang = new C_gio_hang();
if (isset($_POST['action']) && $_POST['action'] === 'create') {

    $c_gio_hang->tao_gio_hang($_POST, $ma_khach_hang);
    return;
}
if (isset($_POST['action']) && $_POST['action'] === 'add') {
    $res = $c_gio_hang->sua_gio_hang_tang($_POST, $ma_khach_hang);
    echo (json_encode($res));
    return;
}
if (isset($_POST['action']) && $_POST['action'] === 'tru') {

    $res = $c_gio_hang->sua_gio_hang_giam($_POST, $ma_khach_hang);
    echo (json_encode($res));
    return;
}
if (isset($_POST['action']) && $_POST['action'] === 'xoa') {

    $c_gio_hang->xoa_gio_hang1($_POST);
    return;
}


$c_gio_hang->hien_thi_gio_hang($ma_khach_hang);
