<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">

                <form action="?pages=delete_all_cate" method="post">
                    <button type="submit" class="btn btn-secondary" name="delete_all">Delete</button>
                    <a class="btn btn-primary" role="button" href="index.php?pages=form_add_ve">Add</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="category1" onclick="checkedAllCate();"></th>
                                <th scope="col">Mã Vé</th>
                                <th scope="col">Mã Chuyến Bay</th>
                                <th scope="col">Mã Hành Khách</th>
                                <th scope="col">Ngày Đặt Vé</th>
                                <th scope="col">Trạng Thái Thanh Toán</th>
                                <th scope="col">Giá Vé</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $stt = 0;
                            foreach ($list_ve as $item) {
                                extract($item);
                                $stt++; ?>
                                <tr>
                                    <td> <input type="checkbox" class="category" name="cate_id[]" value="<?= $cate_id ?>">
                                    </td>
                                    <td>
                                        <?= $MaVe ?>
                                    </td>
                                    <td>
                                        <?= $MaChuyenBay ?>
                                    </td>
                                    <td>
                                        <?= $MaHanhKhach ?>
                                    </td>
                                    <td>
                                        <?= $NgayDatVe ?>
                                    </td>
                                    <td>
                                        <?= $TrangThaiThanhToan ?>
                                    </td>
                                    <td>
                                        <?= $GiaVe ?>
                                    </td>
                                    <td>
                                        <a class="dropdown-item" href="?pages=edit_cate&cate_id=<?= $MaSanBay ?>">Edit</a>
                                        <a class="dropdown-item"
                                            href="?pages=delete_cate&cate_id=<?= $MaSanBay ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>