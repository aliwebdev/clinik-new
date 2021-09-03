<div class="card adoc">
    <div class="card-body">
        <form action="#">
            <div class="form-body">
                <center>
                <h3 class="card-title">Foydalanuvchi malumotlarini O'zgartirish</h3>
                </center>
                        <div class="col-md-4 fileHolder">
                            <label for="">Eski parolni tasdiqlang</label>
                            <input type="password" id="id" class="form-control" placeholder="hospital1856">
                            <a href="javascript:void(0)" onclick="l()"><i class="fas fa-eye only-eye"></i></a>
                        </div>
                    <div class="row col-md-12 userInfo">
                        <div class="col-md-4">
                            <label for="">Yangi foydalanuvchi nomi</label>
                            <input type="text" class="form-control" placeholder="hirurg14">
                        </div>
                        <div class="col-md-4 fileHolder">
                            <label for="">Yangi parol</label>
                            <input type="password" id="id" class="form-control" placeholder="hospital1856">
                            <a href="javascript:void(0)" onclick="l()"><i class="fas fa-eye only-eye"></i></a>
                        </div>
                        <div class="col-md-4 fileHolder">
                            <label for="">Yangi parolni tasdiqlang</label>
                            <input type="password" id="id2" class="form-control" placeholder="hospital1856">
                            <a href="javascript:void(0)" onclick="l2()"><i class="fas fa-eye only-eye"></i></a>
                        </div>
                    </div>
                </div>
            <div class="form-actions userInfo">
                <a href="<?= \yii\helpers\Url::base()?>index" class="btn btn-outline-success">Saqlash <i class="fa fa-check"></i></a>
                <a href="<?= \yii\helpers\Url::base()?>index" class="btn btn-outline-danger">Bekor qilish <i class="fas fa-times"></i></a>
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