<?php

session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Jika diinginkan untuk mengakhiri sesi, hapus juga cookie sesi
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Akhirnya, hancurkan sesi.
session_destroy();

// Arahkan pengguna ke halaman login
header("Location: index.php");
exit;
?>
