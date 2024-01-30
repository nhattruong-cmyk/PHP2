<?php
$list_ve = $ve->ve_select_all();
extract($item);
?>
<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-body">
                <form action="?pages=update_ve" method="post" enctype="multipart/form-data">
                    <div id="form-update-ve" class="row flex-column  g-3">
                        <div class="col-12 text-center">
                            <h2>Chỉnh Sửa Vé</h2>
                            </h2>
                        </div>
                        <input type="" class="form-control" hidden value="<?=$MaVe ?>" name="MaVe">


                        <div class="col-6">
                            <label for="" class="form-label required">Loại Vé</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="LoaiVe" value="0" id="LoaiVe-radio3" <?= $LoaiVe== 0?'checked':false ?>>
                                <label class="form-check-label" for="LoaiVe-radio3">
                                    Chưa Chọn
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="LoaiVe" value="1" id="LoaiVe-radio4" <?= $LoaiVe== 1?'checked':false ?> >
                                <label class="form-check-label" for="LoaiVe-radio">
                                    Một Chiều
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="LoaiVe" value="2" id="LoaiVe-radio4" <?= $LoaiVe== 2?'checked':false ?> >
                                <label class="form-check-label" for="LoaiVe-radio">
                                    Khứ Hồi
                                </label>
                            </div>
                        </div>




                        <div class="col-6 form-group ">
                            <label for="" class="form-label required">Mã Chuyến Bay</label>
                            <select class="form-select" name="MaChuyenBay">
                                <?php
                                foreach ($list_chuyenbay as $item) { ?>
                                    <option <?= $item['MaChuyenBay'] == $MaChuyenBay ? 'selected' : false ?>
                                        value=<?= $item['MaChuyenBay'] ?>><?= $item['MaChuyenBay'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="col-6">
                            <label for="" class="form-label required">Giá Vé</label>
                            <input type=""
                                class="form-control <?= !empty($error['error_GiaVe']) ? 'border border-danger' : false ?>"
                                id="" value="<?= !empty($_POST['GiaVe']) ? $_POST['GiaVe'] : $GiaVe ?>" name="GiaVe">
                            <span id="red_error" class="form-text">
                                <?= !empty($error['error_GiaVe']) ? $error['error_GiaVe'] : false; ?>
                            </span>
                        </div>


                        <div class="col-6">
                        <button type="submit" name="button" value="update_ve" class="btn btn-primary">Update</button>
                                
                            <a class="btn btn-primary" href="?pages=list_ve" role="button">List of Vé</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>