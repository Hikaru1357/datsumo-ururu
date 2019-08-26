<?php
session_start();
extract($_SESSION);

?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title>お問い合わせ確認｜難波で最もコスパの良い脱毛をお考えなら脱毛サロンうるる</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
    <script src="js/animation.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137177856-4"></script>
    <script>
    $(function(){
      $("#header").load("./common/header.html");
      $("#contact2").load("./common/contact2.html");
      $("#footer").load("./common/footer.html");

    });
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-137177856-4');
    </script>
  </head>
  <body>
   <div id="header"></div>
   <div class="mask" style="display: none; position: fixed; top: 0; left:0; bottom: 0; right: 0; background-color: rgba(0, 0, 0, 0.4); z-index: 1000;"></div>
   <div class="main">
     <!-- ====================================================================

           otoiawase-confirm

     =================================================================== -->
     <section class="contact-confirm">
       <h2>こちらの内容でお問い合わせしてよろしいでしょうか</h2>
       <form action="./backend/mail.php" method="post">
                <div>
                    <label for="name">お名前 : </label>
                    <label> <?= $name ?> </label>
                    <input type="hidden" name="name" value=<?= $name ?> >
                </div>
                <div>
                    <label for="kananame">フリガナ : </label>
                    <label> <?= $kananame ?> </label>
                    <input type="hidden" name="kananame" value=<?= $kananame ?> >
                </div>
                <div>
                    <label for="tel">電話番号 : </label>
                    <label> <?= $tel ?> </label>
                    <input type="hidden" name="tel" value=<?= $tel ?> >
                </div>
                <div>
                    <label for="email">メールアドレス : </label>
                    <label> <?= $email ?> </label>
                    <input type="hidden" name="email" value=<?= $email ?> >
                </div>
                <div>
                    <label for="message">お悩みの部位1 : </label>
                    <label> <?= $parts1 ?> </label>
                    <input type="hidden" name="parts1" value=<?= $parts1 ?> >
                </div>
                <div>
                    <label for="message">お悩みの部位2 : </label>
                    <label> <?= $parts2 ?> </label>
                    <input type="hidden" name ="parts2" value=<?= $parts2 ?> >
                </div>
                <div>
                    <label for="message">お問い合わせ内容 : </label>
                    <label> <?= $content ?> </label>
                    <input type="hidden" name ="content" value=<?= $content ?> >
                </div>
                <p><input class="button" type="button" onClick="location.href='./otoiawase'" value="戻る"></p>
                <p><input class="button" type="submit" value="完了"></p>
            </form>
    </section>
   </div>
    <!-- ====================================================================

          contact2

    =================================================================== -->
      <div id="contact2"></div>
     <!-- ====================================================================

           footer

     =================================================================== -->
     <div id="footer"></div>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSHTZOwVoBG7sIBs1WRNqPysU2e5UBruA&language=ja"></script>
    </body>
  </html>
