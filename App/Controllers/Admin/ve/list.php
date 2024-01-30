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
                                <th scope="col">Điểm Xuất Phát</th>
                                <th scope="col">Điểm Đến</th>
                                <th scope="col">Loại Vé</th>
                                <th scope="col">Giá Vé</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            function pdo_get_connection()
                            {
                                $servername = 'localhost';
                                $dbname = 'php2';
                                $username = 'root';
                                $password = 'mysql';

                                try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    return $conn;
                                } catch (PDOException $e) {
                                    die("Kết nối thất bại: " . $e->getMessage());
                                }
                            }

                            // Hàm để lấy danh sách vé
                            function getListVe()
                            {
                                try {
                                    $conn = pdo_get_connection();

                                    $sql = "SELECT ve.*, chuyenbay.*
                                    FROM ve
                                    INNER JOIN chuyenbay ON ve.MaChuyenBay = chuyenbay.MaChuyenBay
                                    ORDER BY ve.MaVe ASC";
                            
                                    $stmt = $conn->query($sql);
                                    $list_ve = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    $conn = null;
                                    return $list_ve;
                                } catch (PDOException $e) {
                                    die("Lỗi truy vấn: " . $e->getMessage());
                                }
                            }
                            // Lấy danh sách vé
                            $list_ve = getListVe();
                            // Hiển thị dữ liệu trong bảng
                            $stt = 0;
                            foreach ($list_ve as $item) {
                                extract($item);
                                $stt++;
                                ?>
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
                                        <?= $MaSanBayXuatPhat ?>
                                    </td>
                                    <td>
                                        <?= $MaSanBayDen ?>
                                    </td>
                                    <td>
                                        <?= ($LoaiVe == 1) ? 'Một Chiều' : (($LoaiVe == 2) ? 'Khứ Hồi' : '') ?>
                                    </td>
                                    <td>
                                        <?= $GiaVe ?>
                                    </td>
                                    <td>
                                        <a class="dropdown-item" href="?pages=edit_ve&MaVe=<?= $MaVe ?>">Edit</a>
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