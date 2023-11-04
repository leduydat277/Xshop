<table class="table">
    <thead>
        <tr>

            <th scope="col">Tên loại</th>
            <th scope="col">Mã loại</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá thấp nhất</th>
            <th scope="col">Giá cao nhất</th>
            <th scope="col">Giá trung bình</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($thong_ke as $tk) { ?>
            <tr>
                <td><?php echo $tk['ten_loai'] ?></td>
                <td><?php echo $tk['ma_loai'] ?></td>
                <td><?php echo $tk['so_luong'] ?></td>
                <td><?php echo $tk['gia_min'] ?></td>
                <td><?php echo $tk['gia_max'] ?></td>
                <td><?php echo $tk['gia_trung_binh'] ?></td>




            </tr>
        <?php } ?>

    </tbody>
</table>
<form action="thong_ke.php" method="post">
    <input type="hidden" name="action" value="xem_thong_ke">
    <button type="submit" class="btn btn-danger">Xem biểu đồ</button>

</form>