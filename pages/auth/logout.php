<?php
session_start();
unset($_SESSION['user']['auth']);
session_destroy();
header("Location: /pages/auth/index.php");