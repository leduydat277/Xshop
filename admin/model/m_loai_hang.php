<?php
include_once("database.php");
// laays duwx lieeuj tuwf db
class M_loai_hang extends database
{
    function loai_selectall()
    {
        $sql = "SELECT * FROM loai_hang";
        return $this->pdo_query($sql, []);
    }
    // thêm mới loại
    function loai_create($ma_loai, $ten_loai)
    {
        $sql = " INSERT INTO loai_hang (ten_loai) VALUES (?)";
        $this->pdo_execute($sql, $ten_loai);
    }
    // xoá loại
    function loai_delete($ma_loai)
    {
        $sql = "DELETE FROM loai_hang WHERE ma_loai = ?";
        $this->pdo_execute($sql, $ma_loai);
    }
    // lấy theo một mã loại
    function loai_select_by_id($ma_loai)
    {
        $sql = "SELECT * FROM loai_hang WHERE ma_loai = ?";
        $res = $this->pdo_query_one($sql, [$ma_loai]);
        return $res;
    }
    // update
    function loai_update($ma_loai, $ten_loai)
    {
        $sql = "UPDATE loai_hang SET ten_loai = ? WHERE ma_loai = ?";
        $this->pdo_execute($sql, $ten_loai, $ma_loai);
    }
}