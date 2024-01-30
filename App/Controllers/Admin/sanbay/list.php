<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">

                <form action="?pages=delete_all_cate" method="post">
                    <button type="submit" class="btn btn-secondary" name="delete_all">Delete</button>
                    <a class="btn btn-primary" role="button" href="index.php?pages=form_add_sanbay">Add</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="category1" onclick="checkedAllCate();"></th>
                                <th scope="col">MaSanBay</th>
                                <th scope="col">TenSanBay</th>
                                <th scope="col">DiaChi</th>
                                <th scope="col">ThongTinLienHe</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $stt = 0;
                            foreach ($list_sanbay as $item) {
                                extract($item);
                                $stt++; ?>
                                <tr>
                                    <td> <input type="checkbox" class="category" name="cate_id[]" value="<?= $cate_id ?>">
                                    </td>
                                    <td>
                                        <?= $MaSanBay ?>
                                    </td>
                                    <td>
                                        <?= $TenSanBay ?>
                                    </td>
                                    <td>
                                        <?= $DiaChi ?>
                                    </td>
                                    <td>
                                        <?= $ThongTinLienHe ?>
                                    </td>
                                    <td>
                                        <a class="dropdown-item" href="?pages=edit_sanbay&MaSanBay=<?= $MaSanBay ?>">Edit</a>
                                        <a class="dropdown-item" href="#" onclick="confirmDelete(<?= $MaSanBay ?>)">Delete</a>
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

<script>
    function confirmDelete($MaSanBay) {
        // Sử dụng hàm confirm để hiển thị hộp thoại xác nhận
        var isConfirmed = confirm("Bạn có chắc chắn muốn xóa không?");

        // Nếu người dùng click vào "OK", thì chuyển đến hàm xóa
        if (isConfirmed) {
            // Chuyển đến hàm xóa, có thể là hàm xóa của bạn
            // Ví dụ: deleteCategory(cateId);
            window.location.href = "?pages=delete_sanbay&MaSanBay=" + $MaSanBay;
        }
        // Nếu người dùng click vào "Cancel", không thực hiện gì cả
    }
</script>
