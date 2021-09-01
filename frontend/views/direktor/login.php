<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="position: relative;">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="<?= \yii\helpers\Url::base()?>/images/img-01.png" alt="IMG">
        </div>

        <form class="login100-form validate-form">
          <span class="login100-form-title">
            Ro'yxatga olish sahifasi
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Foydalanuvchi nomi">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fas fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input id="id" class="input100" type="password" name="pass" placeholder="Parol">
            <span class="focus-input100"></span>
            <span class="symbol-input100" >
              
            </span>
          </div>
            <a onclick="l()" style="position: absolute; top: 335px; margin-left: 35px; z-index: 58;" href="#">
            <i  class="fa fa-eye" aria-hidden="true"></i></a>
          <div class="container-login100-form-btn">
            <a class="login100-form-btn" href="<?= \yii\helpers\Url::base()?>index">KIRISH</a>
          </div>
          <div class="text-center p-t-12">
            
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="#">
              Have a question?
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
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
</script>