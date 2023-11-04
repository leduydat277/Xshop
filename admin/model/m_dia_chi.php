<?php
session_start();
include_once("database.php");

class M_dia_chi extends database
{
    function select_tinh()
    {
        $sql = "SELECT * FROM tinh";
        return $this->pdo_query($sql, []);
    }

    function select_huyen($id_tinh)
    {
        $sql = " SELECT * FROM quan_huyen WHERE id_tinh = ? ";
        return $this->pdo_query($sql, [$id_tinh]);
    }

    function select_phuong_xa($id_huyen)
    {
        $sql = " SELECT * FROM phuong_xa WHERE id_quan_huyen = ?";
        return $this->pdo_query($sql, [$id_huyen]);
    }
    function dia_chi2($dc)
    {
        $sql = "SELECT  phuong_xa.ten_phuong_xa , quan_huyen.ten_quan_huyen,tinh.ten_tinh
        FROM phuong_xa
        JOIN quan_huyen ON phuong_xa.id_quan_huyen = quan_huyen.id_quan_huyen
        JOIN tinh ON quan_huyen.id_tinh = tinh.id_tinh
        WHERE phuong_xa.id_phuong_xa = ?  AND quan_huyen.id_quan_huyen = ? AND tinh.id_tinh = ?";
        return $this->pdo_query($sql, [$dc['id_phuong_xa'], $dc['id_quan_huyen'], $dc['id_tinh']]);
    }
    function xac_nhan($gh_id2, $dc)
    {
        $sql = "INSERT INTO don_hang( id_gio_hang, ma_san_pham, ten_hang_hoa, don_gia, so_luong, tong_gia, ten_khach_hang, email_khach_hang, xa, huyen, tinh, sdt) VALUES(?,?,?,?,?,?,?,?,?,?,?,?) ";
        return $this->pdo_execute($sql, $gh_id2["id_gio_hang"], $gh_id2["ma_san_pham"], $gh_id2["ten_hang_hoa"], $gh_id2["don_gia"], $gh_id2["so_luong_san_pham"], $gh_id2["tong_gia"], $_SESSION['ho_ten'],  $_SESSION['email'], $dc["xa"], $dc["huyen"], $dc["tinh"], $dc["sdt"]);
    }
}
