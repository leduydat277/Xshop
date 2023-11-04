<table class="table">
    <thead>
        <tr>

            <th scope="col">Mã hàng hoá</th>
            <th scope="col">Tên hàng hoá</th>
            <th scope="col">Số lần bình luận</th>
            <th scope="col">Xem</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($binh_luan as $binh_luan) { ?>
            <tr>




                <td><?php echo $binh_luan['ma_hang_hoa'] ?></td>
                <td><?php echo $binh_luan['ten_hang_hoa'] ?></td>
                <td><?php echo $binh_luan['so_lan_binh_luan'] ?></td>
                <td><a href="./binh_luan.php?ma_hang_hoa=<?php echo $binh_luan['ma_hang_hoa'] ?>">
                        <button type="button" class="btn btn-warning">Xem chi tiết</button></a>

                    <form action="binh_luan.php" method="post">
                        <input type="hidden" name="action3" value="xem_binh_luan">

                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>