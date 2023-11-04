<!-- file router của bảng loại hàng -->
<?php
include "controller/c_loai_hang.php";
$c_loai_hang = new C_loai_hang();

// phuowng thuwcs update
if ($_POST['action'] == "update") {
    $c_loai_hang->update($_POST);
    return;
}

// phuong thuc edit
if (isset($_GET['ma_loai'])) {
    $ma_loai = $_GET['ma_loai'];
    $c_loai_hang->edit($ma_loai);
    return;
}


// phhuowng thức tạo
if ($_POST['action'] == "create") {
    $c_loai_hang->create($_POST);
    return;
}

// phuong thuc edit
if (isset($_GET['store'])) {
    $c_loai_hang->store();
    return;
}
// phương thức xoá
if ($_POST['action'] == "delete") {
    $ma_loai = $_POST['data'];
    $c_loai_hang->del($ma_loai);
    return;
}


// echo "admin";
// phương thức lấy tất cả

$c_loai_hang->hienthimanhinh();
