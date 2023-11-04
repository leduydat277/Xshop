<?php
include("model/m_dia_chi.php");
class C_dat_hang
{
    function hienthi()
    {

        $m_dat_hang = new M_dia_chi();
        $tinh = $m_dat_hang->select_tinh();

        $view = 'view_site/dat_hang/dat_hang.php';
        include("view_site/layout/index.php");
    }
    function select_huyen($id_tinh)
    {
        $m_dat_hang = new M_dia_chi();
        $huyen_list = $m_dat_hang->select_huyen($id_tinh);
        return $huyen_list;
    }
    function select_phuong_xa($id_huyen)
    {
        $m_dat_hang = new M_dia_chi();
        $phuong_xa_list = $m_dat_hang->select_phuong_xa($id_huyen);
        return $phuong_xa_list;
    }
    function dia_chi($dia_chi)
    {
        $m_dat_hang = new M_dia_chi();
        $dc = $m_dat_hang->dia_chi2($dia_chi);
        return $dc;
    }
    function don_hang($gh_id2, $dc)
    {
        $m_dat_hang = new M_dia_chi();
        $dat_hang = $m_dat_hang->xac_nhan($gh_id2, $dc);
    }
}
