<?php
  include "../php/item_db.php";
  $nameId1 = $itemId1["name"];
  $priceId1 = $itemId1["price"];
  $img1Id1 = $itemId1["img1"];

  $nameId2 = $itemId2["name"];
  $priceId2 = $itemId2["price"];
  $img1Id2 = $itemId2["img1"];

  $nameId3 = $itemId3["name"];
  $priceId3 = $itemId3["price"];
  $img1Id3 = $itemId3["img1"];

  $nameId4 = $itemId4["name"];
  $priceId4 = $itemId4["price"];
  $img1Id4 = $itemId4["img1"];

  $nameId5 = $itemId5["name"];
  $priceId5 = $itemId5["price"];
  $img1Id5 = $itemId5["img1"];

  $nameId6 = $itemId6["name"];
  $priceId6 = $itemId6["price"];
  $img1Id6 = $itemId6["img1"];

  $nameId7 = $itemId7["name"];
  $priceId7 = $itemId7["price"];
  $img1Id7 = $itemId7["img1"];

  $nameId8 = $itemId8["name"];
  $priceId8 = $itemId8["price"];
  $img1Id8 = $itemId8["img1"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/scss/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>3HundredFPS</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="wrapper__body">
      <div class='logo_png'>
          <a href='index.php'>
          <img src="/img/logo.png"  class='logologo'>
</a>
        </div>
        <div class="body__header">


          <div class="header__menu">
            <a <?php
              if($_COOKIE["id"]){
                echo 'onclick=', '"location.href=', "'profile.php'", ';"';
              }
              else{
                echo "href='#popup'";
              }
            ?> class="header__lk popup_link">
              <img src="/img/profile.svg" alt="" />
              <div class="lk">
              <?php

                    $mysql = new mysqli('localhost', 'root', '', 'fps');

                    $id = $_COOKIE["id"];

                    $result = $mysql->query("SELECT * FROM `user` WHERE `id` = '$id'");

                    $profile = $result->fetch_assoc();

                    $history = mysqli_query($mysql, "SELECT * FROM `history` WHERE `userId` = '$id'");

                    $mysql->close();

                    $tname = $profile["name"];
                    if (!empty ($tname)){
                      echo $tname;
                    }else{
                      echo 'профиль';
                    }


?>
              </div>
            </a>
            <div onclick="location.href='basket.php'" class="header__bucket">
              <img src="/img/bucket.png" alt="" />
              <div class="lk">Корзина</div>
            </div>
          </div>
        </div>
        <div class="body__search">
          <input
            class="search"
            id="search"
            type="text"
            placeholder="Поиск по сайту"
          />
          
        </div>
        <div class="body__catalog">
          <div class="catalog__header">каталог</div>
          <div class="catalog__body">
            <div class="catalog__filters">
              <div class="filter__type filter sex">
                <div class="filter__header">
                    Производитель
                </div>
                <div class="filter__body">
                    <label class="filter__checkbox" for="Nvidia">
                        <input data-sex="Nvidia" checked="checked" type="checkbox" id="Nvidia" />Nvidia
                    </label>
                      <label class="filter__checkbox" for="AMD">
                        <input data-sex="AMD" checked="checked" type="checkbox" id="AMD" />AMD
                    </label>
                </div>
              </div>
              <div class="filters__type filter brand">
                <div class="filter__header">Вендор</div>
                <div class="filter__body">
                  <label class="filter__checkbox"  for="MSI">
                    <input data-brand="MSI" checked="checked"  type="checkbox" id="MSI" />MSI
                </label>
                  <label class="filter__checkbox" for="ASUS">
                    <input data-brand="ASUS" checked="checked"  type="checkbox" id="ASUS" />ASUS
                </label>
                  <label class="filter__checkbox" for="Zotac">
                    <input data-brand="Zotac" checked="checked" type="checkbox" id="Zotac" />Zotac
                </label>
                  <label class="filter__checkbox" for="palit">
                    <input data-brand="palit" checked="checked" type="checkbox" id="palit" />palit
                </label>
                  <label class="filter__checkbox" for="Gigabyte">
                    <input data-brand="Gigabyte" checked="checked" type="checkbox" id="Gigabyte" />Gigabyte
                </label>
                  <label class="filter__checkbox" for="ROG">
                    <input data-brand="ROG" checked="checked" type="checkbox" id="ROG" />ROG
                </label>
                </div>
              </div>
            </div>
            <div class="catalog__sneakers">
                <form action="../pages/item.php" method="POST">
                    <button action="submit" class="card__item ASUS Nvidia checked">
                      <input type="text" name="id" value="1" style="display:none">
                        <div class="item__img"><img src="<?php echo $img1Id1; ?>" alt=""></div>
                        <div class="item__header"><?php echo $nameId1; ?></div>
                        <div class="item__price"><?php echo $priceId1; ?> ₽</div>
                    </button>
                </form>
                <form action="../pages/item.php" method="POST">
                  <button action="submit" class="card__item ASUS Nvidia checked">
                    <input type="text" name="id" value="2" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id2; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId2; ?></div>
                    <div class="item__price"><?php echo $priceId2; ?> ₽</div>
                  </button>
                </form>
                <form action="../pages/item.php" method="POST">
                  <button action="submit" class="card__item MSI AMD checked">
                  <input type="text" name="id" value="3" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id3; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId3; ?></div>
                    <div class="item__price"><?php echo $priceId3; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="card__item Zotac Nvidia checked">
                <input type="text" name="id" value="4" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id4; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId4; ?></div>
                    <div class="item__price"><?php echo $priceId4; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="card__item Zotac Nvidia checked">
                <input type="text" name="id" value="5" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id5; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId5; ?></div>
                    <div class="item__price"><?php echo $priceId5; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="card__item palit Nvidia checked">
                <input type="text" name="id" value="6" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id6; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId6; ?></div>
                    <div class="item__price"><?php echo $priceId6; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="card__item Gigabyte Nvidia checked">
                <input type="text" name="id" value="7" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id7; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId7; ?></div>
                    <div class="item__price"><?php echo $priceId7; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="card__item ROG AMD checked">
                <input type="text" name="id" value="8" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id8; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId8; ?></div>
                    <div class="item__price"><?php echo $priceId8; ?> ₽</div>
                </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup" id="popup">
        <div class="popup_body">
            <form action="/php/auth.php" method="post">
                <div class="popup_content">
                    <div class="popup_letter"></div>
                    <div class="popup_title">Вход в личный кабинет</div>
                    <input type="text" placeholder="Логин" name="auth_login" class="popup_login popup_input">
                    <input type="password" placeholder="Пароль" name="auth_password" class="popup_password popup_input">
                    <button action="submit" class="popup_button">Вход</button>
                    <a href="#popup_2" class="popup_link popup_registration">
                        <div>Вас еще нет в системе?<br>
                            Зарегистрируйтесь!</div>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="popup_2">
        <div class="popup_body">
            <form action="/php/registration.php" method="post">
                <div class="popup_content">
                    <div class="popup_letter"></div>
                    <div class="popup_title">Регистрация</div>
                    <input type="text" id="popup_name" placeholder="Ваше Имя:" name="popup_name"
                        class="popup_name popup_input">
                    <input type="email" id="popup_email" placeholder="Ваш E-mail:" name="popup_email"
                        class="popup_email popup_input">
                    <input type="password" id="popup_password" placeholder="Пароль" name="popup_password"
                        class="popup_password popup_input">
                    <input type="password" id="popup_passwordRepeat" name="popup_passwordRepeat"
                        placeholder="Повторите пароль" class="popup_passwordRepeat popup_input">
                    <button action="submit" id="popup_button" class="popup_button ">Зарегистрироваться</button>
                    <div id="error"></div>
                </div>
            </form>
        </div>
    </div>

    <script src="/js/search.js"></script>
    <script src="/js/filter.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/registration.js"></script>
  </body>
</html>
