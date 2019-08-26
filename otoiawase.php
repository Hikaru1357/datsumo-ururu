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
    <title>ご予約、お問い合わせ｜難波で最もコスパの良い脱毛をお考えなら脱毛サロンうるる</title>
    <meta name="description" content="ご予約、お問い合わせを承っております。ご予約の際は、お電話でお願いいたします。">
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

           main-under

     =================================================================== -->
     <section class="main-under">
       <img src="img/salon-mainvisual.jpg" alt="うるるの内装">
       <h1>ご予約、お問い合わせ</h1>
     </section>
     <!-- ====================================================================

           contact-page

     =================================================================== -->
     <section class="contact-page">
       <div class="contact-inner">
         <img src="img\contactpage-contact.png" alt="contact">
         <h2>ご予約、お問い合わせ</h2>
         <p>ご連絡を頂きますと、通常3営業日以内に返信いたします。
           もしも返信がない場合、うまく送信できない場合は、お電話にてご連絡ください。
         </p>
         <div class="caution">
           <p><img src="img\contactpage-arrow.png" alt="">メールアドレスを間違われますと、こちらからの返信が出来ません。</p>
           <p><img src="img\contactpage-arrow.png" alt="">ご質問のご返答は３営業日以内にメールいたします。</p>
           <p><img src="img\contactpage-arrow.png" alt="">お問い合わせいただいた個人情報について第3者に開示また提供することはありません。</p>
           <p><img src="img\contactpage-arrow.png" alt="">お問い合わせいただいた内容は個人が特定できないようにして、よくある質問などに引用・転載する場合がございます。</p>
           <p><img src="img\contactpage-arrow.png" alt="">携帯メールを入力される場合で迷惑メールや着信拒否の設定をされている場合はdatsumousalon.ururu358@gmail.comからのメールを受信できるように設定してください。</p>
         </div>
         <div class="phone-here">
           <p>ご予約や無料ご相談は<br class="b48">こちらのお電話から</p>
           <div class="phone-here-inner">
             <div class="phone-here-left">
               <p>↓ 脱毛サロン うるる ↓</p>
               <a href="tel:0671810657" onclick="gtag('event','クリック',{'event_category':'電話で予約orお問い合わせ','event_label':'0671810657',});"><img src="img\contact-phone.png" alt="電話番号">06-7181-0657</a>
             </div>
             <div class="phone-here-right">
               <p>〒 556-0011 大阪府大阪市浪速区難波中1-14-8</p>
               <p>定休日/不定休</p>
               <p>受付時間/午前11時～12時 13時～19時</p>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="contact-form">
       <h2>メールでのお問い合わせは<br class="b48">こちらから</h2>
          <h2 style="color:red;"><?php if(!empty($_SESSION['error'])){
            foreach($_SESSION['error'] as $keynum => $value) {
              echo $value; }
            }
         ?> </h2>
                <form class="" action="./backend/registerValidate.php" method="post">
                <div>
                    <label for="name">お名前<span style="color:red;margin-left:5px;">※必須項目</span></label>
                    <input type="text" id="name" name="name" value=<?= $name ?>>
                </div>
                <div>
                    <label for="kananame">フリガナ<span style="color:red;margin-left:5px;">※必須項目</span></label>
                    <input type="text" id="kananame" name="kananame" value=<?= $kananame ?>>
                </div>
                <div>
                    <label for="tel">電話番号<span style="color:red;margin-left:5px;">※必須項目</span></label>
                    <input type="text" id="tel" name="tel" value=<?= $tel ?>>
                </div>
                <div>
                    <label for="email">メールアドレス<span style="color:red;margin-left:5px;">※必須項目</span></label>
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
                    <label for="message">お問い合わせ内容<span style="color:red;margin-left:5px;">※必須項目</span></label>
                    <textarea id="content" name="content" value=<?= $content ?>> <?= $content ?></textarea>
                </div>
                <p><input class="button" type="submit" value="確認"></p>
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
