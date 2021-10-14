<?php

  $menu[] = ['href' => '?p=main', 'title' => 'Főoldal'];
  $menu[] = ['href' => '?p=about', 'title' => 'Rólunk'];

  if (isset($_SESSION['user'])){
    $menu[] = ['href' => '?p=real-estates&m=my_ads', 'title' => 'Saját hirdetéseim'];
    $menu[] = ['href' => '?p=users&m=logout', 'title' => 'Kijelentkezés'];
    $menu[] = ['href' => '?p=users&m=settings', 'title' => $_SESSION['user']];
  } else {
    $menu[] = ['href' => '?p=users&m=login', 'title' => 'Bejelentkezés'];
    $menu[] = ['href' => '?p=users&m=registration', 'title' => 'Regisztráció'];
  }
  
  require_once UTILS_DIR.'functions.php';
  $menu = array_reverse($menu, true);
  print_menu($menu);
?>
</br>