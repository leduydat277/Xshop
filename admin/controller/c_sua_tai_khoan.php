<?php
include("model/m_khach_hang.php");

class C_sua_tai_khoan
{

    function  hienthisuataikhoan()
    {
        $view = "view_site/sua_tai_khoan/v_sua_tai_khoan.php";
        include("view_site/layout/index.php");
    }
}
