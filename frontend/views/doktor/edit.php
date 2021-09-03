<div class="card adoc">
    <div class="card-body">
        <form action="#">
            <div class="form-body">
                <center>
                <h3 class="card-title">Malumot o'zgaritish</h3>
                </center>
                <hr>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Familiyasi Ism Sharif</label>
                            <input type="text" id="firstName" class="form-control" placeholder="Shohrux Isomiddinov">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Tug'ilgan sana</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Telefon 1</label>
                            <input type="text" id="firstName" class="form-control" placeholder="+99890 1234567">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Manzil</label>
                            <input type="text" id="firstName" class="form-control" placeholder="Alisher Navoiy 14uy">
                            <div class="form-group">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Jins</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Erkak</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Ayol</label>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <label class="control-label">Telefon 2</label>
                        <input type="text" id="firstName" class="form-control" placeholder="+99890 1234567">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Telegram</label>
                        <input type="text" id="firstName" class="form-control" placeholder="@sahobov">
                    </div>
                    <div class="col-md-4 fileHolder">
                        <label class="control-label">Adminstrator Rasmi(rasm tanlang)</label>
                        <input type="file" class="fileIcon">
                        <i class="far fa-file-image"></i>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Soha</option>
                            <option value="">Hirurg</option>
                            <option value="">Jarroh</option>
                            <option value="">LOR</option>
                            <option value="">Tish shifokori</option>
                        </select>
                    </div>
                </div>
                </div>
            <div class="form-actions userInfo">
            <div class="form-actions userInfo row">
                <a href="<?= \yii\helpers\Url::base()?>index" class="btn btn-outline-success">Saqlash <i class="fa fa-check"></i></a>
                <div class="col-md-9">
                <a href="<?= \yii\helpers\Url::base()?>index" class="btn btn-outline-danger">Bekor qilish <i class="fas fa-times"></i></a>
                </div>
                <a href="<?= \yii\helpers\Url::base()?>edit2" class="btn btn-outline-dark">Parolni o'zgartirish <i class="fas fa-edit"></i></a>
            </div>
            </div>
        </form>
    </div>
</div>