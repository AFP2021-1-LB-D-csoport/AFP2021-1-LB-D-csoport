<?php
session_start();
require_once 'private/utils/require.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Letső, Nyíri, Safarcsik & Telegdi Real Estate</title>
    <link rel="stylesheet" href="<?=CSS_DIR?>">
    <script src="<?=JS_DIR?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header><?php @include_once COMPONENTS_DIR.'header.php'; ?></header>
    <menu><?php require_once COMPONENTS_DIR.'menu.php'; ?></menu>
    <main><?php require_once CONTENT_DIR.'content.php'; ?></main>
    <footer><?php @include_once COMPONENTS_DIR.'footer.php'; ?></footer>
</body>
</html>