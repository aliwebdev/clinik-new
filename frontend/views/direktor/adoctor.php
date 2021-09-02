<div class="card adoc">
    <div class="card-body">
        <form action="#">
            <div class="form-body">
                <center>
                <h3 class="card-title">Doktor Saylash</h3>
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
                        <label class="control-label">Shifokor Rasmi(rasm tanlang)</label>
                        <input type="file" class="fileIcon">
                        <i class="far fa-file-image"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label userInfo">Shifokor sohasi</label>
                            <select class="form-control sSoha custom-select">
                                <option value="" disabled selected>---</option>
                                <option value="">Lor</option>
                                <option value="">Xirurg</option>
                            </select>
                        </div>
                    </div>
                </div>
                    <div class="row col-md-12">
                        <div class="col-md-4">
                            <label for="">Foydalanuvchi Nomi</label>
                            <input type="text" class="form-control" placeholder="hirurg14">
                        </div>
                        <div class="col-md-4">
                            <label for="">Parol</label>
                            <input type="password" id="id" class="form-control" placeholder="hospital1856">
                            <a href="javascript:void(0)" onclick="l()"><i class="fas fa-eye only-eye"></i></a>
                        </div>
                        <div class="col-md-4">
                            <label for="">Parolni tasdiqlang</label>
                            <input type="password" id="id2" class="form-control" placeholder="hospital1856">
                            <a href="javascript:void(0)" onclick="l2()"><i class="fas fa-eye only-eye"></i></a>
                        </div>
                    </div>
                </div>
            <div class="form-actions userInfo">
                <button type="submit" class="btn btn-outline-success">Saylash <i class="fa fa-check"></i></button>
                <a href="<?= \yii\helpers\Url::base()?>index" class="btn btn-outline-danger">Cancel <i class="fas fa-times"></i></a>
            </div>
        </form>
    </div>
</div>
<script>
    function l(){
        var x =
        document.getElementById("id");
        if (x.type === "password"){
            x.type = "text";
        }else{
            x.type = "password";
        }
    }

    function l2(){
        var x =
        document.getElementById("id2");
        if (x.type === "password"){
            x.type = "text";
        }else{
            x.type = "password";
        }
    }
</script>