
<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-body">
                <form action="?pages=insert_sanbay" method="post" enctype="multipart/form-data">
                    <div id="form-add-sanbay" class="row flex-column  g-3">
                        <div class="col-12 text-center">
                            <h2>Add New Sân Bay</h2>
                            </h2>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label required">Mã Sân Bay</label>
                            <input type="" class="form-control <?= !empty($error['error_masanbay']) ? 'border border-danger' : false ?>" id="" value="<?= !empty($_POST['MaSanBay']) ? $_POST['MaSanBay'] : false ?>" name="MaSanBay">
                            <span id="red_error" class="form-text"><?= !empty($error['error_masanbay'])?$error['error_masanbay']:false;?></span>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label required">Tên Sân Bay</label>
                            <input type="" class="form-control <?= !empty($error['error_tensanbay']) ? 'border border-danger' : false ?>" id="" value="<?= !empty($_POST['TenSanBay']) ? $_POST['TenSanBay'] : false ?>" name="TenSanBay">
                            <span id="red_error" class="form-text"><?= !empty($error['error_tensanbay'])?$error['error_tensanbay']:false;?></span>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label required">Địa Chỉ</label>
                            <input type="" class="form-control <?= !empty($error['error_diachi']) ? 'border border-danger' : false ?>" id="" value="<?= !empty($_POST['DiaChi']) ? $_POST['DiaChi'] : false ?>" name="DiaChi">
                            <span id="red_error" class="form-text"><?= !empty($error['error_diachi'])?$error['error_diachi']:false;?></span>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label required">Thông Tin Liên Hệ</label>
                            <input type="" class="form-control <?= !empty($error['error_thongtinlienhe']) ? 'border border-danger' : false ?>" id="" value="<?= !empty($_POST['ThongTinLienHe']) ? $_POST['ThongTinLienHe'] : false ?>" name="ThongTinLienHe">
                            <span id="red_error" class="form-text"><?= !empty($error['error_thongtinlienhe'])?$error['error_thongtinlienhe']:false;?></span>
                        </div>
                        <div class="col-6">
                        <button type="submit" name="btn_insert" value="btn_insert" class="btn btn-primary">Add</button>
                            <a class="btn btn-primary" href="?pages=list_sanbay" role="button">List of Sân Bay</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>