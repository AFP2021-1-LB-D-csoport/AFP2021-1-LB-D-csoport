<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<?php

  if (isset($_SESSION['user'])){
    $menu[] = ['href' => '?p=real-estates&m=my_ads', 'title' => 'Saját hirdetéseim'];
    $menu[] = ['href' => '?p=users&m=logout', 'title' => 'Kijelentkezés'];
    $menu[] = ['href' => '?p=users&m=settings', 'title' => $_SESSION['user']];
  } else {
    $menu[] = ['href' => '?p=users&m=registration', 'title' => 'Regisztráció'];
    $menu[] = ['href' => '?p=users&m=login', 'title' => 'Bejelentkezés'];
  }

  $menu[] = ['href' => '?p=about', 'title' => 'Rólunk'];
  $menu[] = ['href' => '?p=main', 'title' => 'Főoldal'];  
  
  require_once UTILS_DIR.'functions.php';
  $menu = array_reverse($menu, true);
  print_menu($menu);
?>
</br>