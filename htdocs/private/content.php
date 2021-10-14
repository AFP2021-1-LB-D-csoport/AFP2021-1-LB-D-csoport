<?php

$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING) ?? 'main';

$address = './private/pages/'.$page.'.php';

if (!file_exists($address)){
    header('Location: '.BASE_URL);
}
require_once $address;

if (filter_has_var(INPUT_GET, 'm')){
    $local_operation = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_STRING);
    if ($local_operation == false)
        header('Location: '.BASE_URL);
    $operation = $local_operation;
    $operation();
}

?>