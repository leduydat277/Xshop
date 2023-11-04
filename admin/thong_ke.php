<?php
include "controller/c_thong_ke.php";
$c_thong_ke = new C_thong_ke();

if ($_POST['action'] == 'xem_thong_ke') {
    $c_thong_ke->xem_thong_ke();
    return;
}
if (!$_POST['action']) {
    $c_thong_ke->hienthimanhinh();
    return;
}
