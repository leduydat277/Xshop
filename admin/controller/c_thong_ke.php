<?php
include("model/m_thong_ke_hang_hoa.php");


class C_thong_ke
{
    function hienthimanhinh()
    {
        // gọi và db lấy dữ liệux
        $m_thong_ke = new M_thong_ke();
        $thong_ke = $m_thong_ke->thong_ke();


        // hiển thị ra màn hình
        $title = 'Thống kê';
        $view = "view/thong_ke/v_thong_ke.php";
        include("view/layout/index.php");
    }
    function xem_thong_ke()
    {
        // gọi và db lấy dữ liệux
        $m_thong_ke = new M_thong_ke();
        $thong_ke = $m_thong_ke->thong_ke();


        // hiển thị ra màn hình

        $view = "view/thong_ke/bieu_do.php";
        include("view/layout/index.php");
    }
}