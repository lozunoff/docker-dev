<?php
$from = "sender@localhost";
$to = "recipient@localhost";
$result = mail($to, time(), 'Test email', 'From: '. $from);
if ($result) {
    echo "Successfully! Check your <a href='http://localhost:8025/'>mailbox</a>!";
} else {
    echo "Error! Check settings!";
}
