<?php
    $id = $_POST['id'];

    $mysql = new mysqli('localhost', 'root', '', 'fps');

    $result = $mysql->query("SELECT * FROM `videocard` WHERE `id` = $id");

    $item = $result->fetch_assoc();

    $name = $item['name'];
    $price = $item['price'];
    $img1 = $item['img1'];
    $colich = $item['colich']


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title><?php echo $name ?></title>
</head>
<body>
    <div class="wrapper">
    <div class='logo_png'>
          <a href='index.php'>
          <img src="/img/logo.png"  class='logologo'>
        </div>
        <div class="wrapper__body">
        <div class="body__header">
          <div class="header__logo">
            <img src="/img/vin.jpg" alt="" />
          </div>
          <div class="header__menu">
            <a <?php
              if($_COOKIE["id"]){
                echo 'onclick=', '"location.href=', "'profile.php'", ';"';
              }
              else{
                echo "href='#popup'";
              }
            ?> 
            
            class="header__lk popup_link">
              <img src="/img/profile.svg" alt="" />
              <div class="lk">Профиль</div>
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
        <div class="body__item">
            <div class="item__header">
                <?php echo $name ?>
            </div>
            <div class="item__body">
           
                  <div class="item__img"><img src="<?php echo $img1; ?>" alt=""></div>
              
              <div class="item__body-info">
                <div class="item__body-price">
                  <?php echo $price ?> ₽
                </div class = "item__body-colich">
                <form action="../php/purchase.php" method="post">
                      <input type="text" name="id" value="<?php echo $id;?>" style="display:none" >
                      <select required name="colich"  style="display:none">
                      <?php
                       ?>
              </div>
                <div class="item__body-colich">

                      <?php
                      if($colich == 0){
                        echo '<p>Товар отсутсвует</p>';
                      }
                        $count = 1;

                          if($colich > 0){
                            echo '<option class="colich" value=', $count, '>' ,  $count,  '</option>';
                           
                          }
                          $count++;
                      ?>
                      </select>
                      
                      <button action="submit" class = "knopka3"
                      <?php
                      if($colich == 0)
                        echo 'style="display:none"';
                      
                      ?>
                      >Добавить в корзину</button>
                      </form>
                      <div class="ostatok">
                      <?php
                      if($colich == 0)
                        echo '<p>Товар отсутсвует</p>';
                      
                      ?>
                      </div>
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

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/registration.js"></script>
    <script src="/js/slider.js"></script>
</body>
</html>