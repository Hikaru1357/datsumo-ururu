<?php
session_start();
extract($_SESSION);
require 'backend/masterValue/destressedPart.php';
?>


<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title>当サロンについて｜難波でコスパの良い脱毛をお考えなら脱毛サロンうるる</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
    <script src="js/animation.js"></script>
  </head>
  <body>
    <header>
        <div class="header-inner">
          <div class="catchcopy">
            <p>脱毛サロン選びはこれで最後。難波でコスパの良い脱毛をお考えなら</p>
          </div>
          <div class="header-content">
            <div class="header-left">
              <img src="img\header-logo.png" alt="脱毛サロンうるるのロゴ">
              <h1><img src="img\header-ururu.png" alt="脱毛サロンうるる"></h1>
            </div>
            <div class="nb64 header-right">
              <div class="header-right-icons">
                <a href="#"><img src="img\header-circle1.png" alt="よくあるご質問"></a>
                <a href="#"><img src="img\header-circle2.png" alt="アクセスはこちら"></a>
              </div>
              <div class="call">
                <p>お電話でのお問い合わせ</p>
                <a href="tel:0671810657"><img src="img\contact-phone.png" alt="電話番号">06-7181-0657</a>
                <p>定休日/不定休</p>
                <p>受付時間/午前11時～12時 13時～19時</p>
              </div>
            </div>
            <a href="tel:0671810657" class="b64 sp-header"><i class="fas fa-phone"></i></a>
            <a href="#" class="b64 sp-header"><i class="fas fa-envelope"></i></a>
            <a href="#" class="b64 sp-header"><i class="fas fa-bars"></i></a>
            <nav style="display:none">
              <li><a href="#">トップページ</a></li>
              <li><a href="#">当サロンについて</a></li>
              <li><a href="#">脱毛の流れ</a></li>
              <li><a href="#">脱毛メニュー・料金</a></li>
              <li><a href="#">スタッフブログ</a></li>
              <li><a href="#">よくあるご質問</a></li>
              <li><a href="#">お問い合わせ</a></li>
            </nav>
          </div>
          <nav class="nb64">
            <ul>
              <li><a href="#">トップページ</a></li>
              <li><a href="#">当サロンについて</a></li>
              <li><a href="#">脱毛の流れ</a></li>
              <li><a href="#">脱毛メニュー・料金</a></li>
              <li><a href="#">スタッフブログ</a></li>
              <li><a href="#">お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
  　</header>
    <div class="main">
        <!-- ====================================================================

              main_visual

        =================================================================== -->
        <section class="main-visual">
          <h2><?php if(!empty($_SESSION['error'])){
            foreach($_SESSION['error'] as $keynum => $value) {
              echo $value; }
            }
         ?> </h2>
                <form class="" action="./backend/registerValidate.php" method="post">
                <div>
                    <label for="name">お名前</label>
                    <input type="text" id="name" name="name" value=<?= $name ?>>
                </div>
                <div>
                    <label for="kananame">フリガナ</label>
                    <input type="text" id="kananame" name="kananame" value=<?= $kananame ?>>
                </div>
                <div>
                    <label for="tel">電話番号</label>
                    <input type="text" id="tel" name="tel" value=<?= $tel ?>>
                </div>
                <div>
                    <label for="email">メールアドレス</label>
                    <input type="text" id="email" name="email" value=<?= $email ?>>
                </div>
                <div>
                    <label for="message">お悩みの部位1</label>
                    <select id = parts1 name="parts1">
                            <!-- 両脇、手の甲・指、足の甲・指、鼻下 -->
                        <option value="">選択してください</option>
                        <?php foreach ($destressed_parts as $key => $val) : ?>
                        <?php if($val == $parts1 ) { ?>
                          <option value="<?php echo $val; ?>" selected> <?php echo $val; ?></option>
                        <?php } else {?>
                        <option value="<?php echo $val; ?>"> <?php echo $val; ?></option>
                        <?php } ?>  
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="message">お悩みの部位2</label>
                    <select id = parts2 name="parts2">
                        <option value="">選択してください</option>
                        <?php foreach ($destressed_parts as $key => $val) : ?>
                        <?php if($val == $parts2 ) { ?>
                          <option value="<?php echo $val; ?>" selected> <?php echo $val; ?></option>
                        <?php } else {?>
                        <option value="<?php echo $val; ?>"> <?php echo $val; ?></option>
                        <?php } ?>  
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="message">お問い合わせ内容</label>
                    <textarea id="content" name="content" value=<?= $content ?>> <?= $content ?></textarea>
                </div>
                <input type="submit" value="確認">
            </form>
        </section>
      </div>
        <!-- ====================================================================

              contact2

        =================================================================== -->
        <section class="contact2">
          <div class="google-map-border">
            <div class="google-map">
            </div>
          </div>
          <div class="detail">
            <h2>脱毛サロン うるる</h2>
            <a href="tel:0671810657"><img src="img\contact-phone.png" alt="電話番号">06-7181-0657</a>
            <p>〒 556-0011 大阪府大阪市浪速区難波中1-14-8</p>
            <p>定休日/不定休</p>
            <p>受付時間/午前11時～12時 13時～19時</p>
            <table border="1">
              <thead>
                <tr>
                  <th>診療時間</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>11:00~12:00</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td>
                </tr>
                <tr>
                  <td>13:00~19:00</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td><td>〇</td>
                </tr>
              </tbody>
            </table>
            <div class="clearfix">
              <a href="#" class="fr to-access"><img src="img\contact-access.png" alt="アクセスはこちら"></a>
            </div>
          </div>
          <div class="clearfix">
            <a href="#" class="fr back-to-top"><i class="b64 fas fa-chevron-up" style="display:none;"></i></a>
          </div>
        </section>
         <!-- ====================================================================

               footer

         =================================================================== -->
       <footer>
         <nav>
           <ul>
             <li><a href="#">トップページ</a></li>
             <li><a href="#">当サロンについて</a></li>
             <li><a href="#">脱毛の流れ</a></li>
             <li><a href="#">脱毛メニュー・料金</a></li>
             <li><a href="#">スタッフブログ</a></li>
             <li><a href="#">お問い合わせ</a></li>
             <li><a href="#">サイトマップ</a></li>
           </ul>
         </nav>
         <div class="sns">
           <a href="#"><img src="img\footer-line.png" alt="Line@"></a>
           <a href="#"><img src="img\footer-insta.png" alt="instagram"></a>
           <a href="#"><img src="img\footer-twitter.png" alt="Twitter"></a>
           <a href="#"><img src="img\footer-facebook.png" alt="Facebook"></a>
         </div>
         <p>COPYRIGHT (C) 脱毛サロンうるる ALL RIGHTS RESERVED.</p>
       </footer>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSHTZOwVoBG7sIBs1WRNqPysU2e5UBruA&language=ja"></script>
      </body>
    </html>
