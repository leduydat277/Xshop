<?php
include("model/m_hang_hoa.php");
include("c_loai_hang.php");

function hienthimanhinh2()
{
    // gọi và db lấy dữ liệux
    $m_loai_hang = new M_loai_hang();
    $loai_hang = $m_loai_hang->loai_selectall();
}


class C_hang_hoa
{
    function hienthimanhinh()
    {
        // gọi dữ liệu 
        $m_hang_hoa = new M_hang_hoa();
        $hang_hoa = $m_hang_hoa->hang_hoa_selectall();
        // select all 
        $title = "Danh sách hàng hoá";
        $view = "view/hang_hoa/v_quan_ly_hang_hoa.php";
        include("view/layout/index.php");
    }

    function store2()
    {
        $m_loai_hang = new M_loai_hang();
        $loai_hang = $m_loai_hang->loai_selectall();

        $title = "Tạo loại hàng";
        $view = "view/hang_hoa/v_form_hang_hoa.php";
        $action = "create";
        include("view/layout/index.php");
    }

    function create_hang_hoa($a)
    {

        $m_hang_hoa = new M_hang_hoa();
        if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
            $file_name = $_FILES['hinh']['name'];
            $file_tmp = $_FILES['hinh']['tmp_name'];
            $upload_dir = 'public/image2/'; // Thay đổi đường dẫn thư mục lưu tệp của bạn.
            $hinh = $upload_dir . $file_name;
            move_uploaded_file($file_tmp, $hinh);
        }

        $hang_hoa_by_id = $m_hang_hoa->create_hang_hoa(
            $a["ma_hang_hoa"],
            $a["ten_hang_hoa"],
            $a["don_gia"],
            $a["giam_gia"],
            $hinh,
            $a["ngay_nhap"],
            $a["mo_ta"],
            $a["dac_biet"],
            $a["so_luot_xem"],
            $a["ma_loai"]
        );
        include("hang_hoa.php");
    }



    // edit
    function edit_hang_hoa($ma2)
    {
        $m_hang_hoa = new M_hang_hoa();
        $hang_hoa_by_id = $m_hang_hoa->hang_hoa_select_by_id($ma2);

        $m_loai_hang = new M_loai_hang();
        $loai_hang = $m_loai_hang->loai_selectall();



        $title = "Edit hàng hoá";
        $view = "view/hang_hoa/v_form_hang_hoa.php";
        $action = "update";
        include("view/layout/index.php");
    }





    // update 
    function update2($a2)
    {
        //xử lý bd
        $m_hang_hoa = new M_hang_hoa();


        if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
            $file_name = $_FILES['hinh']['name'];
            $file_tmp = $_FILES['hinh']['tmp_name'];
            $upload_dir = 'image2/'; // Thay đổi đường dẫn thư mục lưu tệp của bạn.
            $hinh = $upload_dir . $file_name;
            move_uploaded_file($file_tmp, $hinh);
        }



        $hang_hoa_by_id = $m_hang_hoa->hang_hoa_update(
            $a2["ma_hang_hoa"],
            $a2["ten_hang_hoa"],
            $a2["don_gia"],
            $a2["giam_gia"],
            $hinh,
            $a2["ngay_nhap"],
            $a2["mo_ta"],
            $a2["dac_biet"],
            $a2["so_luot_xem"],
            $a2["ma_loai"]
        );
        //Xử lý tệp tải lên (nếu có)
        //update xong trả ra tranh chinhs
        header('Location:hang_hoa.php');
    }

    // del
    function del_hang_hoa($ma_hang_hoa)
    {
        $m_hang_hoa = new  M_hang_hoa();
        $hang_hoa = $m_hang_hoa->del_hang_hoa($ma_hang_hoa);
        header('Location:hang_hoa.php');
    }
}
