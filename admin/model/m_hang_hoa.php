<?php
include_once("database.php");

class M_hang_hoa extends database
{
    function hang_hoa_selectall()
    {
        $sql = "SELECT * FROM hang_hoa";
        return $this->pdo_query($sql, []);
    }

    function hang_hoa_select_by_loai($ma_loai)
    {
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ?";
        $hi = $this->pdo_query($sql, [$ma_loai]);
        return $hi;
    }


    function create_hang_hoa(
        $ma_hang_hoa,
        $ten_hang_hoa,
        $don_gia,
        $giam_gia,
        $hinh,
        $ngay_nhap,
        $mo_ta,
        $dac_biet,
        $so_luot_xem,
        $ma_loai
    ) {
        $sql = "INSERT INTO hang_hoa (ten_hang_hoa, don_gia, giam_gia, hinh, ngay_nhap, mo_ta, dac_biet, so_luot_xem, ma_loai) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->pdo_execute(
            $sql,
            $ten_hang_hoa,
            $don_gia,
            $giam_gia,
            $hinh,
            $ngay_nhap,
            $mo_ta,
            $dac_biet,
            $so_luot_xem,
            $ma_loai
        );
    }
    function hang_hoa_select_by_id($ma_hang_hoa)
    {
        $sql = "SELECT * FROM hang_hoa WHERE ma_hang_hoa = ?";
        $red = $this->pdo_query_one($sql, [$ma_hang_hoa]);
        return $red;
    }




    function hang_hoa_update(
        $ma_hang_hoa,
        $ten_hang_hoa,
        $don_gia,
        $giam_gia,
        $hinh,
        $ngay_nhap,
        $mo_ta,
        $dac_biet,
        $so_luot_xem,
        $ma_loai


    ) {

        $sql = "UPDATE hang_hoa SET ten_hang_hoa = ?, don_gia = ?, giam_gia = ?, hinh = ?, ngay_nhap = ?, mo_ta = ?, dac_biet = ?, so_luot_xem = ?, ma_loai =? WHERE ma_hang_hoa = ? ";
        $this->pdo_execute(
            $sql,
            $ten_hang_hoa,
            $don_gia,
            $giam_gia,
            $hinh,
            $ngay_nhap,
            $mo_ta,
            $dac_biet,
            $so_luot_xem,
            $ma_loai,
            $ma_hang_hoa
        );
    }


    function del_hang_hoa($ma_hang_hoa)
    {
        $sql = "DELETE FROM hang_hoa WHERE ma_hang_hoa = ?";
        $this->pdo_execute($sql, $ma_hang_hoa);
    }
}
