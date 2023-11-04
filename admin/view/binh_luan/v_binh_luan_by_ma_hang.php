<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã bình luận</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Mã hàng hoá</th>
            <th scope="col">Ngày bình luận </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($binh_luan_by_id as $comment) { ?>
            <tr>

                <td><?php echo $comment['ma_binh_luan'] ?></td>
                <td><?php echo $comment['noi_dung'] ?></td>
                <td><?php echo $comment['ma_khach_hang'] ?></td>
                <td><?php echo $comment['ma_hang_hoa'] ?></td>
                <td><?php echo $comment['ngay_binh_luan'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>