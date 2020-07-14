<?php
// --- All fomrs to destroy session and reset cookeis
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(), '', 0, '/');

header('Location: signin.php');
