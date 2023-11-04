<?php
include "controller/c_hang_hoa.php";
$c_hang_hoa = new C_hang_hoa();
//hienthimanhinh2();

if ($_POST['action2'] == 'update') {
    $c_hang_hoa->update2($_POST);
    header('Location:hang_hoa.php');
}
// edit 
if (isset($_GET['ma_hang_hoa'])) {
    $ma_hang_hoa = $_GET['ma_hang_hoa'];
    $c_hang_hoa->edit_hang_hoa($ma_hang_hoa);
    return;
}

if ($_POST['action2'] == 'create') {
    $c_hang_hoa->create_hang_hoa($_POST);
    header('Location:hang_hoa.php');
    return;
}

if (isset($_GET['store2'])) {
    $c_hang_hoa->store2();
    hienthimanhinh2();
    return;
}
//phương thức xoá
if ($_POST['action2'] == "delete") {
    $ma_hang_hoa = $_POST['data2'];
    $c_hang_hoa->del_hang_hoa($ma_hang_hoa);
    return;
}



// Phương thức lấy tất cả
$c_hang_hoa->hienthimanhinh();
