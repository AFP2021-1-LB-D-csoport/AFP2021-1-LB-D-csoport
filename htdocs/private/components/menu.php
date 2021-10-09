<?php

  $menu[] = ['href' => '?p=main', 'title' => 'Főoldal'];

  if (isset($_SESSION['user'])){
    $menu[] = ['href' => '?p=users&m=my-ads', 'title' => 'Saját hirdetéseim'];
    $menu[] = ['href' => '?p=users&m=logout', 'title' => 'Kijelentkezés'];
  } else {
    $menu[] = ['href' => '?p=users&m=login', 'title' => 'Bejelentkezés'];
    $menu[] = ['href' => '?p=users&m=registration', 'title' => 'Regisztráció'];
  }
  $menu[] = ['href' => '?p=about', 'title' => 'Rólunk'];
  require_once UTILS_DIR.'functions.php';
  print_menu($menu);
?>
</br>