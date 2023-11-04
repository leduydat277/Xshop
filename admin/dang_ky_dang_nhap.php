<?php
include "controller/c_dang_ky_dang_nhap.php";
$c_dang_ky_dang_nhap = new C_dang_ky_dang_nhap();


if ($_POST['action'] == "dang_nhap") {
    $c_dang_ky_dang_nhap->dang_nhap_tk($_POST);
    // var_dump($_POST);
    return;
}

if ($_POST['action'] == "dang_ky") {
    $c_dang_ky_dang_nhap->dang_ky($_POST);
    return;
}
if ($_POST['action2'] == "dang_ky") {
    $c_dang_ky_dang_nhap->dang_ky_tk($_POST);
    $c_dang_ky_dang_nhap->hienthidangnhap();
    return;
}


$c_dang_ky_dang_nhap->hienthidangnhap();
