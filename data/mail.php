<?php
$from = "sender@localhost";
$to = "recipient@localhost";
$result = mail($to, time(), 'Test email', 'From: '. $from);
if ($result) {
    echo "Сообщение передано функции mail, проверьте почту в ящике.";
} else {
    echo "Функция mail не работает, проверьте настройки.";
}
