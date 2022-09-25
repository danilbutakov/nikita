<?php
require_once 'php/connect.php';
require_once 'php/form.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
</head>

<body>
    <div class="admin">
        <a href="/php/admin.php">Админка</a>
    </div>
    <div class="titles">
        <?php
        $title = mysqli_query($connect, "SELECT * FROM `titles`");
        $title = mysqli_fetch_assoc($title);
        ?>
        <strong>
            <h1 class="first-h1"><?= $title['title'] ?></h1>
        </strong>
        <i>
            <h2 class="second-h2">Второй заголовок</span></h2>
        </i>
        <u>
            <h3 class="third-h3">Третий заголовок</h3>
        </u>
        <strike>
            <h4 class="fouth-h4">Четвертый заголовок</h4>
        </strike>
        <abbr title="">
            <h5 class="fives-h5">Пятый заголовок</h5>
        </abbr>
        <?php
        ?>
    </div>
    <span class="otvet">
        a<sup>m</sup> * a<sup>n</sup> = a<sup>m + n</sup>
    </span>
    <div class="spiski">
        <ol class="ol">
            <li>a</li>
            <li>b</li>
            <li>c</li>
        </ol>
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
    <div class="imgs">
        <button class="btn-ya">
            <a href="https://dzen.ru/?yredirect=true">Яндекс</a>
        </button>
        <div class="images">
            <?php
            $imgs = mysqli_query($connect, "SELECT * FROM `imgs`");
            while ($res = mysqli_fetch_assoc($imgs)) {
            ?>
                <img class="img1" src="img/<?= $res['image']; ?>">
            <?php
            }
            ?>
        </div>
    </div>
    <div class="form">
        <form class="info" action="/php/form.php" method="post">
            <label for="name">Имя</label>
            <input type="text" name="name">
            <label for="number">Телефон</label>
            <input type="text" name="phone">
            <label for="email">Email</label>
            <input type="email" name="email">
            <!-- <label for="img">Картинка</label>
            <input type="file" name="img"> -->
            <label for="message">Сообщение</label>
            <textarea name="text" cols="30" rows="10"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
    <div class="tables">
        <table>
            <tr>
                <th>Числитель</th>
            </tr>
            <tr>
                <th>Время:</th>
                <th>Понедельник</th>
                <th>Вторник</th>
                <th>Среда</th>
                <th>Четверг</th>
                <th>Пятница</th>
            </tr>
            <tr>
                <td>8:30 - 10:00</td>
                <td></td>
                <td></td>
                <td>Программирование(лаба)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10:10 - 11:40</td>
                <td>Программирование(лекция)</td>
                <td></td>
                <td>Выч. алг.(лекция)</td>
                <td>
                <td>Теор. инф.(лаба)</td>
                </td>
            </tr>
            <tr>
                <td>12:10 - 13:40</td>
                <td>ООП(практика)</td>
                <td>ООП(лекция)</td>
                <td>Ин. яз.(практика)</td>
                <td>
                <td>Дискр. мат.(практика)</td>
                </td>
            </tr>
            <tr>
                <td>13:50 - 15:20</td>
                <td>ООП(лаб)</td>
                <td>Разраб. треб.(лаба)</td>
                <td>Физ-ра(практика)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>15:30 - 17:00</td>
                <td></td>
                <td>Выч. алг.(лаба)</td>
                <td></td>
                <td>Теор. инф.(лекция)</td>
                <td></td>
            </tr>
            <tr>
                <td>17:10 - 18:40</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Программирование(лаба)</td>
                <td></td>
            </tr>
        </table>
        <table>
            <tr>
                <th>Знаменатель</th>
            </tr>
            <tr>
                <th>Время:</th>
                <th>Понедельник</th>
                <th>Вторник</th>
                <th>Среда</th>
                <th>Четверг</th>
                <th>Пятница</th>
                <th>Суббота</th>
            </tr>
            <tr>
                <td>8:30 - 10:00</td>
                <td></td>
                <td></td>
                <td>Программирование(лаба)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10:10 - 11:40</td>
                <td>Программирование(лекция)</td>
                <td>Ин.яз.(практика)</td>
                <td>Дис. мат.(лекция)</td>
                <td>
                <td>Теор. инф.(лаба)</td>
                <td></td>
                </td>
            </tr>
            <tr>
                <td>12:10 - 13:40</td>
                <td>Разраб.треб.(лаба)</td>
                <td>ООП(лекция)</td>
                <td></td>
                <td>
                <td>Дискр. мат.(практика)</td>
                </td>
                <td>Теор. инф.(лекция)</td>
            </tr>
            <tr>
                <td>13:50 - 15:20</td>
                <td>ООП(лаб)</td>
                <td>Выч. алг.(практика)</td>
                <td></td>
                <td>Разраб. треб.(лекция)</td>
                <td></td>
                <td>Теор. инф.(лаба)</td>
            </tr>
            <tr>
                <td>15:30 - 17:00</td>
                <td></td>
                <td>Физ-ра(практика)</td>
                <td></td>
                <td>Ин. яз.(практика)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>17:10 - 18:40</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Программирование(лаба)</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="black-nout">
        <div class="video">
            <iframe class="video1" width="560" height="315" src="https://www.youtube.com/embed/YPRaA6KhyXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="btn-video">Видео</button>
        </div>
        <div class="map">
            <iframe class="map1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9765.929825730727!2d104.2612773!3d52.2709426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x368423aaef9b2b13!2z0JjRgNC60YPRgtGB0LrQuNC5INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDRg9C90LjQstC10YDRgdC40YLQtdGCINC_0YPRgtC10Lkg0YHQvtC-0LHRidC10L3QuNGP!5e0!3m2!1sru!2sru!4v1664010109395!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>

</html>