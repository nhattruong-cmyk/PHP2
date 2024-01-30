<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-body">
                <form action="?pages=insert_ve" method="post" enctype="multipart/form-data">
                    <div id="form-add-ve" class="row flex-column  g-3">
                        <div class="col-12 text-center">
                            <h2>Add New Vé</h2>
                            </h2>
                        </div>
                        <!-- <div class="col-6">
                            <label for="" class="form-label required">Mã Vé</label>
                            <input type="" class="form-control <?= !empty($error['error_mave']) ? 'border border-danger' : false ?>" id="" value="<?= !empty($_POST['MaVe']) ? $_POST['MaVe'] : false ?>" disabled name="MaVe">
                            <span id="red_error" class="form-text"><?= !empty($error['error_mave']) ? $error['error_mave'] : false; ?></span>
                        </div> -->
                        <div class="col-6">
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
                        </div>

                        <div class="col-6">
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
                        </div>
                       
                      

                        <div class="col-6">
                            <label for="" class="form-label required">Giá Vé</label>
                            <input type=""
                                class="form-control <?= !empty($error['error_GiaVe']) ? 'border border-danger' : false ?>"
                                id="" value="<?= !empty($_POST['GiaVe']) ? $_POST['GiaVe'] : false ?>" name="GiaVe">
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_GiaVe']) ? $error['error_GiaVe'] : false; ?>
                            </span>
                        </div>
                        <div class="col-6">
                            <button type="submit" name="btn_insert" value="btn_insert"
                                class="btn btn-primary">Add</button>
                            <a class="btn btn-primary" href="?pages=list_ve" role="button">List of Vé</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>