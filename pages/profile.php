<?php

  $mysql = new mysqli('localhost', 'root', '', 'fps');

  $id = $_COOKIE["id"];

  $result = $mysql->query("SELECT * FROM `user` WHERE `id` = '$id'");

  $profile = $result->fetch_assoc();

  $history = mysqli_query($mysql, "SELECT * FROM `history` WHERE `userId` = '$id'");

  $mysql->close();

  $name = $profile["name"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css" />
    <title>Профиль</title>
</head>
<body>
<div class="wrapper">
          <div class='logo_png'>
          <a href='index.php'>
          <img src="/img/logo.png"  class='logologo'>
</a>
        </div>
      <div class="wrapper__body">
        <div class="body__header">
          <div class="header__menu">
            <a href="#popup" class="header__lk popup_link">
              <img src="/img/profile.svg" alt="" />
              <div class="lk">Профиль</div>
            </a>
            <div onclick="location.href='basket.php'" class="header__bucket">
              <img src="/img/bucket.png" alt="" />
              <div class="lk">Корзина</div>
            </div>
          </div>
          
        </div>
        <div class="body__item">
          <div class="item__header">
            Здравствуйте, <?php echo $name; ?>
          </div>
        </div>
        <div class="profile__history">
            <div class="history__header">
              История ваших покупок:
            </div>
            <div class="history__body">
              <?php
                while($userHistory = mysqli_fetch_assoc($history)) {
                  $mysql = new mysqli('localhost', 'root', '', 'fps');
                  $videocardId = $userHistory["videocardId"];
                  $videocard = $mysql->query("SELECT * FROM `videocard` WHERE `id` = '$videocardId'");
                  $videocard = $videocard->fetch_assoc();
              ?>
                <div class="history__item">
                    <div class="item__name">
                      <?php echo $videocard["name"]; ?>
                    </div>
                    <div class="history__img">
                  <img src="<?php echo $videocard["img1"]; ?>" alt="">
                  </div>
                  <div class="history__price">
                  <?php echo $videocard["price"]; ?> ₽
                  </div>
                </div>
                <?php };?>
            </div>
        </div>
        <form action="../php/exit.php">
            <button class="exit">Выйти из профиля</button>
          </form>
</div>
</body>
</html>