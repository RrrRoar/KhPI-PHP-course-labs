<?php
session_start();

$inactive_limit = 300;

if (isset($_SESSION['last_activity'])) {
    $session_lifetime = time() - $_SESSION['last_activity'];

    if ($session_lifetime > $inactive_limit) {
        session_unset();
        session_destroy();
        echo "Сесія завершена через неактивність.";
        exit();
    }

    $inactive_time = $inactive_limit - $session_lifetime;
    echo "Час бездіяльності: " . gmdate("i:s", $inactive_time);
}

$_SESSION['last_activity'] = time();
?>
