<?php

require_once 'connect.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// $img = $_POST['img'];
$text = $_POST['text'];

if (isset($name, $phone, $email, $text)) {
    mysqli_query($connect, "INSERT INTO `form`(`id`, `name`, `phone`, `email`, `text`) VALUES (NULL, '$name', '$phone', '$email', '$text')");
}
Header("Location: ../index.php");
