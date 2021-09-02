<?php
use frontend\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Direktor Sahifasi</title>
    <style>
        
    </style>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div id="main-wrapper container-fluid">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= Url::base()?>/admin/index">
                        <b>
                            <img src="<?= \yii\helpers\Url::base()?>/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="<?= \yii\helpers\Url::base()?>/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                         <img src="<?= \yii\helpers\Url::base()?>/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <img src="<?= \yii\helpers\Url::base()?>/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <div class="navbar-collapse elite-top-menu">
                    <ul class="navbar-nav mr-auto">
                        <li><a href="<?= Url::base()?>/admin/index" class="btn btn-outline-light homeButton">Bosh Sahifa</a></li>
                        <li><h4>&nbsp;</h4></li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li><div id="clock">clock</div></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-calendar-alt"></i></a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                                <div class="message-center">
                                    <div id="calendar-month-year"></div>
                                    <div id="calendar-dates"></div>
<script type="text/javascript">
window.onload = function(){
  var d = new Date();
  var month_name = ['January','February','March','April','May','June','July','August','September','October','November','December'];
  var month = d.getMonth();   //0-11
  var year = d.getFullYear(); //2014
  var first_date = month_name[month] + " " + 1 + " " + year;
  //September 1 2014
  var tmp = new Date(first_date).toDateString();
  //Mon Sep 01 2014 ...
  var first_day = tmp.substring(0, 3);    //Mon
  var day_name = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
  var day_no = day_name.indexOf(first_day);   //1
  var days = new Date(year, month+1, 0).getDate();    //30
  //Tue Sep 30 2014 ...
  var calendar = get_calendar(day_no, days);
  document.getElementById("calendar-month-year").innerHTML = month_name[month]+" "+year;
  document.getElementById("calendar-dates").appendChild(calendar);
}
function get_calendar(day_no, days){
  var todaysDate = new Date().getDate();
  var table = document.createElement('table');
  var tr = document.createElement('tr');

  //row for the day letters
  for(var c=0; c<=6; c++){
      var th = document.createElement('th');
      th.innerHTML = "DSCPJSY"[c];
      tr.appendChild(th);
  }
  table.appendChild(tr);
  //create 2nd row
  tr = document.createElement('tr');
  var c;
  for(c=0; c<=6; c++){
      if(c == day_no){
          break;
      }
      var td = document.createElement('td');
      td.innerHTML = "";
      tr.appendChild(td);
  }
  var count = 1;
  for(; c<=6; c++){
      var td = document.createElement('td');
      if (count == todaysDate) {
        td.className = 'today';
      }
      td.innerHTML = count;
      count++;
      tr.appendChild(td);
  }
  table.appendChild(tr);
  //rest of the date rows
  for(var r=3; r<=7; r++){
      tr = document.createElement('tr');
      for(var c=0; c<=6; c++){
          if(count > days){
              table.appendChild(tr);
              return table;
          }
          var td = document.createElement('td');
          if (count == todaysDate) {
            td.className = 'today';
          }
          td.innerHTML = count;
          count++;
          tr.appendChild(td);
      }
      table.appendChild(tr);
  }
return table;
}
</script>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
                            <img src="<?= \yii\helpers\Url::base()?>/images/4.jpg" alt="user-img" class="img-circle">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Akbar Vahobovich
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="fas fa-edit"></i> My Profile</a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><h4>-Hisobotlar</h4></li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?= Url::base()?>patient" aria-expanded="false">
                                <i class="fas fa-users"></i>
                                Ro'yhatga olish
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?= Url::base()?>doctor" aria-expanded="false">
                                <i class="fas fa-users"></i>
                                Shifokorlar
                            </a>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <?= $content ?>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();