<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Редактирование заголовка</h1>
    <?php
    $sql = mysqli_query($connect, "SELECT * FROM `titles`");
    $resTitle = mysqli_fetch_assoc($sql);
    ?>
    <div class="title__container">
        <form class="titleForm" action="" method="post">
            <input type="text" name="title" placeholder="<?= $resTitle['title']; ?>">
            <input class="titleSubmit" type="submit" placeholder="Сохранить">
        </form>
    </div>
    <?php
    $title = $_POST['title'];
    if (isset($title)) {
        $row = mysqli_query($connect, "UPDATE `titles` SET `title` = '$title'");
    }
    ?>
    <?php
    ?>
    <a href="indexForm.php">Форма</a>
    <a href="../index.php">Выйти</a>
</body>

</html>