<?php
session_start();
include_once("database.php");
class M_binh_luan extends database
{
    function binh_luan_selectall()
    {
        $sql = "SELECT hh.ma_hang_hoa, hh.ten_hang_hoa, COUNT(bc.ma_hang_hoa) AS so_lan_binh_luan
        FROM hang_hoa AS hh
        LEFT JOIN binh_luan AS bc ON hh.ma_hang_hoa = bc.ma_hang_hoa
        GROUP BY hh.ma_hang_hoa, hh.ten_hang_hoa;
        ";
        return $this->pdo_query($sql, []);
    }
    function binh_luan_select_by_id($ma_hang_hoa)
    {
        $sql = "SELECT * FROM binh_luan WHERE ma_hang_hoa = ?";
        return $this->pdo_query($sql, [$ma_hang_hoa]);
    }
    // function them_binh_luan($bl1, $ma_khach_hang,)
    // {
    //     $sql = "INSERT INTO binh_luan (ma_khach_hang, ma_hang_hoa, noi_dung) VALUE (?, ?, ?)";
    //     return $this->pdo_execute($sql, $ma_khach_hang, $bl1["ma_hang_hoa"], $bl1["noi_dung"]);
    // }
    function them_binh_luan($bl1, $ma_khach_hang)
    {
        $sql = "INSERT INTO binh_luan (ma_khach_hang, ma_hang_hoa, noi_dung) VALUES (?, ?, ?)";
        $insertResult = $this->pdo_execute($sql, $ma_khach_hang, $bl1["ma_hang_hoa"], $bl1["noi_dung"]);

        if ($insertResult) {
            // Nếu bình luận đã được thêm thành công, bạn có thể gọi hàm binh_luan_by_ma_hang để lấy kết quả
            $binh_luan = $this->binh_luan_by_ma_hang($bl1["ma_hang_hoa"]);
            return $binh_luan;
        }

        return false; // Trả về false nếu việc thêm bình luận thất bại
    }

    function binh_luan_by_ma_hang($bl_mh)
    {
        $sql = " SELECT bl.noi_dung, kh.ho_ten FROM binh_luan as bl
        JOIN khach_hang AS kh 
        ON bl.ma_khach_hang = kh.ma_khach_hang
        WHERE bl.ma_hang_hoa = ?";
        return $this->pdo_query($sql, [$bl_mh]);
    }
}
