<?php

include("model/m_loai_hang.php");


class C_loai_hang
{
    function hienthimanhinh()
    {
        // gọi và db lấy dữ liệux
        $m_loai_hang = new M_loai_hang();
        $loai_hang = $m_loai_hang->loai_selectall();

        // hiển thị ra màn hình
        $title = 'Loại hàng';

        $view = "view/loai_hang/v_loai_hang.php";
        include("view/layout/index.php");
    }


    function store()
    {
        $title = "tạo loại hàng";
        $view = "view/loai_hang/v_form_loai_hang.php";
        $action = "create";
        include("view/layout/index.php");
    }

    function create($obj)
    {
        //xử lý bd
        $m_loai_hang = new M_loai_hang();
        $loai_hang_by_id = $m_loai_hang->loai_create($obj["ma_loai"], $obj["ten_loai"]);
        // update xong trả ra tranh chinhs
        header('Location:index.php');
    }

    function edit($ma)
    {
        // model
        $m_loai_hang = new M_loai_hang();
        $loai_hang_by_id = $m_loai_hang->loai_select_by_id($ma);
        // view 
        $title = "edit loai hang";
        $view = "view/loai_hang/v_form_loai_hang.php";
        $action = "update";

        include("view/layout/index.php");
    }

    function update($obj)
    {
        //xử lý bd
        $m_loai_hang = new M_loai_hang();
        $loai_hang_by_id = $m_loai_hang->loai_update($obj["ma_loai"], $obj["ten_loai"]);

        // update xong trả ra tranh chinhs
        header('Location:loai_hang.php');
    }

    function del($ma_loai)
    {
        $del_loai_hang = new M_loai_hang();
        $del_loai_hang_by_id = $del_loai_hang->loai_delete($ma_loai);
        header('Location:loai_hang.php');
    }
}
