<?php
session_start();
include("model/m_khach_hang.php");
class C_dang_ky_dang_nhap
{
    function hienthidangnhap()
    {

        $view = 'view_site/dang_ky_dang_nhap/dang_nhap.php';
        include("view_site/layout/index.php");
    }



    function dang_ky()
    {
        $view = 'view_site/dang_ky_dang_nhap/dang_ky.php';
        include("view_site/layout/index.php");
    }
    function dang_ky_tk($dang_ky)
    {
        $m_dang_ky = new M_khach_hang();
        if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
            $file_name = $_FILES['hinh']['name'];
            $file_tmp = $_FILES['hinh']['tmp_name'];
            $upload_dir = 'public/image2/'; // Thay đổi đường dẫn thư mục lưu tệp của bạn.
            $hinh = $upload_dir . $file_name;
            move_uploaded_file($file_tmp, $hinh);
            $options = ['cost' => 12];
            $hashedPassword = password_hash($dang_ky['mat_khau'], PASSWORD_BCRYPT, $options);
        }

        $kh_dk =  $m_dang_ky->khach_hang_dang_ky($dang_ky['ma_khach_hang'], $dang_ky['email'], $dang_ky['ho_ten'], $hinh,  $hashedPassword);
    }
    function dang_nhap_tk($email)
    {
        $m_dang_nhap = new M_khach_hang();
        $dang_nhap =  $m_dang_nhap->dang_nhap($email['email_dang_nhap']);
        $mat_khau = $email['mat_khau_dang_nhap'];
        // echo $mat_khau;
        // var_dump($dang_nhap);
        // echo $dang_nhap['mat_khau'];



        if ($dang_nhap) {
            $stored_password = $dang_nhap[0]['mat_khau'];

            if (password_verify($mat_khau, $stored_password)) {

                $vai_tro = $dang_nhap[0]['vai_tro'];
                $id_khach_hang = $dang_nhap[0]['ma_khach_hang'];
                $ho_ten_khach_hang = $dang_nhap[0]['ho_ten'];
                $hinh_khach_hang = $dang_nhap[0]['hinh'];
                $email_khach_hang = $dang_nhap[0]['email'];

                $_SESSION['id'] = $id_khach_hang;
                $_SESSION['ho_ten'] = $ho_ten_khach_hang;
                $_SESSION['hinh'] =  $hinh_khach_hang;
                $_SESSION['email'] = $email_khach_hang;


                if ($vai_tro == 1) {
                    header("Location: loai_hang.php");
                } else {
                    header("Location: index.php");
                }



                //header("Location: index.php");
            } else {
                echo 'Đăng nhập thất bại';
            }
        } else {
            echo "Tài khoản không tồn tại";
        }
    }
}
