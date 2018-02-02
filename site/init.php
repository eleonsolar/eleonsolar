<?php
  include 'main/dictionary/es/dic.php';
  include 'main/dictionary/en/dic.php';
  include 'main/components/Utilities.php';

  if(!isset($_GET['lang'])){ header('Location:'.WEB_URL); }

  $utilities = new Utilities();

  $utilities->setLang(($_GET['lang'] == 'es')?$lang_es:$lang_en);
