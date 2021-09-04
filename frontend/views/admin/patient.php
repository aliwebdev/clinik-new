<?
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="card">
    <div class="card-body">
        <form action="#">
            <div class="form-body">
                <center>
                <h3 class="card-title">Bemorlarni ro'yhatga olish</h3>
                </center>
                <hr>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Familiyasi va Ismi</label>
                            <input type="text" id="firstName" class="form-control" placeholder="John Doe">
                                </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Tug'ilgan yili</label>
                            <input type="date" id="" class="form-control" placeholder="">
                                </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Telefon</label>
                            <input type="text" id="firstName" class="form-control" placeholder="+99890 123 45 67">
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
           
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Manzili</label>
                            <input type="text" id="firstName" class="form-control" placeholder="Farovonlink ko'ch 43 uy">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Jinsi</label>
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
                    <div class="col-md-4 row docScroll">
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                        <div class="docTime col-md-12"><h4>Javohir Ikromov</h4><span class="badge badge-info">8</span></div>
                    </div>
                </div>
                <div class="row p-t-20 formSure">
                    <div class="col-md-3">
                        <label for="">Be'morlik sohasi</label>
                        <select name="" class="form-control">
                            <option value="" selected disabled>Soha tanlang</option>
                            <option value="">Tish shifokori</option>
                            <option value="">Hirurg</option>
                            <option value="">Urolog</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Shifokorga bog'lash</label>
                        <select name="" class="form-control">
                            <option value="" selected disabled>Shifokor tanlang</option>
                            <option value=""><h4>Aziz Akramov </h4><span>8</span></option>
                            <option value="">Umar Hakimov <span>8</span></option>
                            <option value="">Laziz Erkinov <span>8</span></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-outline-success"> <i class="fa fa-check"></i> Yuborish</button>
                <button type="button" class="btn btn-outline-danger">Bekor qilish <i class="fas fa-times"></i></button>
            </div>
        </form>
    </div>
</div>