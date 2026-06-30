<?php
session_start();      // Session ko uthao
session_destroy();    // Session ko khatam karo
header("Location: index.php"); // Wapas home page par bhej do
exit();
?>