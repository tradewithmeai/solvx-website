<?php
if ($_POST['email']) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $timestamp = date('Y-m-d H:i:s');
    $line = $timestamp . " - " . $email . "\n";
    file_put_contents('emails.txt', $line, FILE_APPEND | LOCK_EX);
    echo "success";
} else {
    echo "error";
}
?>