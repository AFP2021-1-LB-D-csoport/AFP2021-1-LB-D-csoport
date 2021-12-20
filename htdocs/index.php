<?php
session_start();
session_unset();
require_once 'private/utils/require.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Letső, Nyíri, Safarcsik & Telegdi Real Estate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=CSS_FILE?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="text-center" id="header"><?php @include_once COMPONENTS_DIR.'header.php'; ?></header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark"><?php require_once COMPONENTS_DIR.'menu.php'; ?></nav>
    <main class="foundation"><?php require_once CONTENT_DIR.'content.php'; ?></main>
    <footer class="text-center" id="footer"><?php @include_once COMPONENTS_DIR.'footer.php'; ?></footer>

    <script src="<?=JS_FILE?>"></script>
</body>
</html>