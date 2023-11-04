<?php
include_once("database.php");

class M_gio_hang extends database
{
    function gio_hang_select_all($ma_khach_hang)
    {
        $sql = "SELECT gh.id_gio_hang, gh.ma_san_pham, hh.ten_hang_hoa, hh.don_gia, gh.so_luong_san_pham,(gh.so_luong_san_pham * hh.don_gia) as tong_gia"
            . " FROM gio_hang as gh"
            . " INNER JOIN hang_hoa as hh ON gh.ma_san_pham = hh.ma_hang_hoa"
            . " WHERE gh.ma_khach_hang = ?";

        return $this->pdo_query($sql, [$ma_khach_hang]);
    }

    function gio_hang_select($ma_khach_hang, $ma_san_pham)
    {
        $sql = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND ma_san_pham = ?";
        return $this->pdo_query_one($sql, [$ma_khach_hang, $ma_san_pham]);
    }

    // function get_sp_

    function them_sp_vao_gio_hang($sp, $ma_khach_hang)
    {
        $sql_check  = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND ma_san_pham = ?";
        $flag = $this->pdo_query_one($sql_check, [$ma_khach_hang, $sp["ma_san_pham"]]);

        if ($flag) {
            $sql_update = "UPDATE gio_hang SET so_luong_san_pham = so_luong_san_pham + 1 WHERE ma_khach_hang = ? AND ma_san_pham = ?";
            $this->pdo_execute($sql_update, $ma_khach_hang, $sp["ma_san_pham"]);
        } else {
            $sql = "INSERT INTO gio_hang (ma_khach_hang, ma_san_pham, so_luong_san_pham) VALUE (?, ?, ?)";
            return $this->pdo_execute($sql, $ma_khach_hang, $sp["ma_san_pham"], $sp["so_luong"]);
        }
    }


    function xoa_gio_hang($sp)
    {
        $sql = "DELETE FROM gio_hang WHERE ma_san_pham = ?";
        $this->pdo_execute($sql, $sp["ma_san_pham"]);
    }

    function update_tang($sp, $ma_khach_hang)
    {
        $sql_update = "UPDATE gio_hang SET so_luong_san_pham = so_luong_san_pham + 1 WHERE ma_khach_hang = ? AND ma_san_pham = ?";
        $this->pdo_execute($sql_update, $ma_khach_hang, $sp["ma_san_pham"]);
    }

    function update_giam($sp, $ma_khach_hang)
    {
        $sql_check  = "SELECT * FROM gio_hang WHERE ma_khach_hang = ? AND ma_san_pham = ?";
        $flag = $this->pdo_query_one($sql_check, [$ma_khach_hang, $sp["ma_san_pham"]]);

        if ($flag > 0) {
            $sql_update = "UPDATE gio_hang SET so_luong_san_pham = so_luong_san_pham - 1 WHERE ma_khach_hang = ? AND ma_san_pham = ?";
            $this->pdo_execute($sql_update, $ma_khach_hang, $sp["ma_san_pham"]);
        }
    }
    function dem_so_luong_gio_hang($ma_khach_hang)
    {
        $sql = "SELECT COUNT(ma_san_pham) FROM gio_hang WHERE ma_khach_hang = ?";
        return $this->pdo_query_one($sql, $ma_khach_hang);
    }
    function gio_hang_by_id2($id_gio_hang)
    {
        $sql = "SELECT  gh.id_gio_hang, gh.ma_san_pham, hh.ten_hang_hoa, hh.don_gia, gh.so_luong_san_pham, (gh.so_luong_san_pham * hh.don_gia) as tong_gia
        FROM gio_hang as gh
        INNER JOIN hang_hoa as hh ON gh.ma_san_pham = hh.ma_hang_hoa
        WHERE gh.id_gio_hang = ?
        ";
        return $this->pdo_query_one($sql, [$id_gio_hang]);
    }
}