<?php
session_start();
include("model/m_hang_hoa.php");
include("c_binh_luan.php");

class C_trang_chu
{
    function hienthimanhinh()
    {
        // gọi dữ liệu 
        $m_trang_chu = new M_hang_hoa();
        $hang_hoa = $m_trang_chu->hang_hoa_selectall();
        // select all 

        $title = "Trang chủ";
        $view = "view_site/trang_chu/trang_chu.php";
        include("view_site/layout/index.php");
    }
    function chi_tiet_san_pham($ma_hang_hoa, $ma_loai)
    {
        $m_trang_chu = new M_hang_hoa();
        $chi_tiet_hang_hoa = $m_trang_chu->hang_hoa_select_by_id($ma_hang_hoa);
        $loai_hang = $m_trang_chu->hang_hoa_select_by_loai($ma_loai);
        $m_binh_luan = new M_binh_luan();
        $binh_luan_by_id = $m_binh_luan->binh_luan_by_ma_hang($ma_hang_hoa);


        $title = "Chi tiết";
        $view = "view_site/chi_tiet/chi_tiet.php";
        include("view_site/layout/index.php");
    }
    function hienthiloai($ma_loai)
    {
        $m_trang_chu = new M_hang_hoa();
        $hang_hoa_by_loai = $m_trang_chu->hang_hoa_select_by_loai($ma_loai);

        $view = "view_site/loai_hang/select_loai_hang.php";
        include("view_site/layout/index.php");
    }
}
