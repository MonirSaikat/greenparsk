<?php
$setting = model('settings')->first();
?>
<!DOCTYPE html>

<head>
  <title><?=$setting->site_title?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?=base_url('css/styles.css')?>" rel="stylesheet" type="text/css" />
</head>

<body>

  <div id="container">
    <div id="incontainer">
        <?=$this->include('shared/navbar')?>
      <div id="topPan">
        <a href="/">
        <img src="<?=base_url('images/' . $setting->site_logo)?>" width="253" height="48" alt="" id="logo" />
        </a>
        <img src="<?=base_url('images/slogan.gif')?>" alt="" name="slogan" width="226" height="32" id="slogan" /> </div>

      <div id="header">
        <img src="<?=base_url('images/' . $setting->site_banner ?? '')?>" width="736" height="255" alt="" />
      </div>

      <div id="content">
        <?=$this->renderSection('content')?>
      </div>
    </div>

    <?=$this->include('shared/footer')?>
  </div>
</body>

</html>
