<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-body">
                <form action="?pages=insert_taikhoan" method="post" enctype="multipart/form-data">
                    <div id="form-add-taikhoan" class="row flex-column  g-3">
                        <div class="col-12 text-center">
                            <h2>Thêm Mới Tài Khoản</h2>
                            </h2>
                        </div>
                        <!-- <div class="col-6">
                            <label for="" class="form-label required">Mã Vé</label>
                            <input type="" class="form-control <?= !empty($error['error_mave']) ? 'border border-danger' : false ?>" id="" value="<?= !empty($_POST['MaVe']) ? $_POST['MaVe'] : false ?>" disabled name="MaVe">
                            <span id="red_error" class="form-text"><?= !empty($error['error_mave']) ? $error['error_mave'] : false; ?></span>
                        </div> -->

                        <div class="col-6">
                            <label for="" class="form-label required">Tên Tài Khoản</label>
                            <input type=""
                                class="form-control <?= !empty($error['error_tennguoidung']) ? 'border border-danger' : false ?>"
                                id="" value="<?= !empty($_POST['TenNguoiDung']) ? $_POST['TenNguoiDung'] : false ?>" name="TenNguoiDung">
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_tennguoidung']) ? $error['error_tennguoidung'] : false; ?>
                            </span>
                        </div>

                        <div class="col-6">
                            <label for="" class="form-label required">Mật Khẩu</label>
                            <input type=""
                                class="form-control <?= !empty($error['error_matkhau']) ? 'border border-danger' : false ?>"
                                id="" value="<?= !empty($_POST['MatKhau']) ? $_POST['MatKhau'] : false ?>" name="MatKhau">
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_matkhau']) ? $error['error_matkhau'] : false; ?>
                            </span>
                        </div>

                        
                        <div class="col-6">
                            <label for="" class="form-label required">Quyền Truy Cập</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="QuyenTruyCap" value="0" id="QuyenTruyCap-radio3" checked>
                                <label class="form-check-label" for="QuyenTruyCap-radio3">
                                    Chưa Chọn
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="QuyenTruyCap" value="1" id="QuyenTruyCap-radio4"
                                    >
                                <label class="form-check-label" for="QuyenTruyCap-radio">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="QuyenTruyCap" value="2" id="QuyenTruyCap-radio4"
                                    >
                                <label class="form-check-label" for="QuyenTruyCap-radio">
                                    User
                                </label>
                            </div>
                        </div>

                        <div class="col-6">
                            <button type="submit" name="btn_insert" value="btn_insert"
                                class="btn btn-primary">Add</button>
                            <a class="btn btn-primary" href="?pages=list_taikhoan" role="button">Danh Sách Tài Khoản</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>