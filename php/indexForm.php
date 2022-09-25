<?php
require_once 'connect.php';
require_once 'form.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Формы</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $form = mysqli_query($connect, "SELECT * FROM `form`");
    while ($resForm = mysqli_fetch_assoc($form)) {
    ?>
        <div class="adminForm__container">
            <span class="adminFormSpan">Все формы</span>
            <form class="adminForm" action="" method="post">
                <label for="name">Имя</label>
                <input type="text" name="name" placeholder="<?= $resForm['name']; ?>">
                <label for="number">Телефон</label>
                <input type="text" name="phone" placeholder="<?= $resForm['phone']; ?>">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="<?= $resForm['email']; ?>">
                <label for="message">Сообщение</label>
                <textarea name="text" placeholder="<?= $resForm['text']; ?>" cols="30" rows="10"></textarea>
            </form>
        </div>
    <?php
    }
    ?>
    <a href="admin.php">Назад</a>
</body>

</html>