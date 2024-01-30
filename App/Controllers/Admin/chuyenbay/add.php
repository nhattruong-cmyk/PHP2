<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-body">
                <form action="?pages=insert_chuyenbay" method="post" enctype="multipart/form-data">
                    <div id="form-add-chuyenbay" class="row flex-column  g-3">
                        <div class="col-12 text-center">
                            <h2>Thêm mới chuyến bay</h2>
                            </h2>
                        </div>
                        <!-- <div class="col-6">
                            <label for="" class="form-label required">Mã Vé</label>
                            <input type="" class="form-control <?= !empty($error['error_mave']) ? 'border border-danger' : false ?>" id="" value="<?= !empty($_POST['MaVe']) ? $_POST['MaVe'] : false ?>" disabled name="MaVe">
                            <span id="red_error" class="form-text"><?= !empty($error['error_mave']) ? $error['error_mave'] : false; ?></span>
                        </div> -->
                        <!-- <div class="col-6">
                            <label for="" class="form-label required">Loại Vé</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="LoaiVe" value="0" id="MaVe-radio3" checked>
                                <label class="form-check-label" for="MaVe-radio3">
                                    Chưa Chọn
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="LoaiVe" value="1" id="MaVe-radio4"
                                    >
                                <label class="form-check-label" for="MaVe-radio">
                                    Một Chiều
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="LoaiVe" value="2" id="MaVe-radio4"
                                    >
                                <label class="form-check-label" for="MaVe-radio">
                                    Khứ Hồi
                                </label>
                            </div>
                        </div> -->

                        <!-- <div class="col-6">
                            <label for="" class="form-label required">Mã Chuyến Bay</label>
                            <select id="MaChuyenBay-org" name="MaChuyenBay" class="select2 form-select"
                                data-placeholder="Select MaChuyenBay" data-select2-id="MaChuyenBay-org" tabindex="-1">
                                <option value="" selected disabled>Hãy chọn mã</option>
                                <?php
                                foreach ($list_chuyenbay as $item) {
                                    extract($item); ?>
                                    <option value="<?= $MaChuyenBay ?>" <?= (!empty($_POST['MaChuyenBay']) && $_POST['MaChuyenBay'] == $MaChuyenBay) ? 'selected' : '' ?>>
                                        <?= $MaChuyenBay ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_MaChuyenBay']) ? $error['error_MaChuyenBay'] : false; ?>
                            </span>
                        </div> -->

                        <?php
                        // Kiểm tra xem form đã được gửi chưa
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Kiểm tra xem có dữ liệu được gửi về không
                            if (!empty($_POST['MaSanBayXuatPhat'])) {
                                // Gán giá trị từ form cho biến $MaSanBayXuatPhat
                                $MaSanBayXuatPhat = $_POST['MaSanBay'];

                                // Bây giờ bạn có thể sử dụng $MaSanBayXuatPhat cho mục đích của mình
                                // Ví dụ: có thể lưu giá trị này vào cơ sở dữ liệu hoặc thực hiện các xử lý khác
                            } else {
                                // Nếu không có giá trị được chọn, bạn có thể xử lý theo cách khác tùy thuộc vào yêu cầu của bạn
                            }
                        }
                        ?>

                        <!-- Form HTML -->
                        <div class="col-6">
                            <label for="" class="form-label required">Mã Sân Bay Xuất Phát</label>
                            <select id="MaSanBayXuatPhat-org" name="MaSanBayXuatPhat" class="select2 form-select"
                                data-placeholder="Select MaSanBayXuatPhat" data-select2-id="MaSanBayXuatPhat-org"
                                tabindex="-1">
                                <option value="" selected disabled>Hãy chọn mã</option>
                                <?php
                                foreach ($list_sanbay as $item) {
                                    extract($item);
                                    ?>
                                    <option value="<?= $MaSanBay ?>" <?= (!empty($_POST['MaSanBayXuatPhat']) && $_POST['MaSanBayXuatPhat'] == $MaSanBay) ? 'selected' : '' ?>>
                                        <?= $MaSanBay ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_MaSanBayXuatPhat']) ? $error['error_MaSanBayXuatPhat'] : false; ?>
                            </span>
                        </div>



                        <?php
                        // Kiểm tra xem form đã được gửi chưa
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Kiểm tra xem có dữ liệu được gửi về không
                            if (!empty($_POST['MaSanBay'])) {
                                // Gán giá trị từ form cho biến $MaSanBayDen
                                $MaSanBayDen = $_POST['MaSanBay'];

                                // Bây giờ bạn có thể sử dụng $MaSanBayDen cho mục đích của mình
                                // Ví dụ: có thể lưu giá trị này vào cơ sở dữ liệu hoặc thực hiện các xử lý khác
                            } else {
                                // Nếu không có giá trị được chọn, bạn có thể xử lý theo cách khác tùy thuộc vào yêu cầu của bạn
                            }
                        }
                        ?>

                        <!-- Form HTML -->
                        <div class="col-6">
                            <label for="" class="form-label required">Mã Sân Bay Đến</label>
                            <select id="MaSanBay-org" name="MaSanBay" class="select2 form-select"
                                data-placeholder="Select MaSanBay" data-select2-id="MaSanBay-org" tabindex="-1">
                                <option value="" selected disabled>Hãy chọn mã</option>
                                <?php
                                foreach ($list_sanbay as $item) {
                                    extract($item); ?>
                                    <option value="<?= $MaSanBay ?>" <?= (!empty($_POST['MaSanBay']) && $_POST['MaSanBay'] == $MaSanBay) ? 'selected' : '' ?>>
                                        <?= $MaSanBay ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_MaSanBay']) ? $error['error_MaSanBay'] : false; ?>
                            </span>
                        </div>



                        <div class="col-6">
                            <label for="" class="form-label required">Ngày Và Giờ Xuất Phát</label>
                            <input type="datetime-local"
                                class="form-control <?= !empty($error['error_NgayGioXuatPhat']) ? 'border border-danger' : false ?>"
                                id=""
                                value="<?= !empty($_POST['NgayGioXuatPhat']) ? $_POST['NgayGioXuatPhat'] : false ?>"
                                name="NgayGioXuatPhat">
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_NgayGioXuatPhat']) ? $error['error_NgayGioXuatPhat'] : false; ?>
                            </span>
                        </div>

                        <div class="col-6">
                            <label for="" class="form-label required">Ngày Và Giờ Trờ Về</label>
                            <input type="datetime-local"
                                class="form-control <?= !empty($error['error_NgayGioDen']) ? 'border border-danger' : false ?>"
                                id="" value="<?= !empty($_POST['NgayGioDen']) ? $_POST['NgayGioDen'] : false ?>"
                                name="NgayGioDen">
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_NgayGioDen']) ? $error['error_NgayGioDen'] : false; ?>
                            </span>
                        </div>

                        <div class="col-6">
                            <button type="submit" name="btn_insert" value="btn_insert"
                                class="btn btn-primary">Add</button>
                            <a class="btn btn-primary" href="?pages=list_chuyenbay" role="button">Danh Sách Chuyến
                                Bay</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>