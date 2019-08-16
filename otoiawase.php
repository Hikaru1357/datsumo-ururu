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
    <title>お問い合わせ｜難波でコスパの良い脱毛をお考えなら脱毛サロンうるる</title>
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

           main-under

     =================================================================== -->
     <section class="main-under">
       <img src="img/salon-mainvisual.jpg" alt="うるるの内装">
       <h1>お問い合わせ</h1>
     </section>
     <!-- ====================================================================

           contact-page

     =================================================================== -->
     <section class="contact-page">
       <div class="contact-inner">
         <img src="img\contactpage-contact.png" alt="contact">
         <h2>お問い合わせ</h2>
         <p>ご連絡を頂きますと、通常3営業日以内に返信いたします。
           もしも返信がない場合、うまく送信できない場合は、お電話にてご連絡ください。
         </p>
         <div class="caution">
           <p><img src="img\contactpage-arrow.png" alt="">メールアドレスを間違われますと、こちらからの返信が出来ません。</p>
           <p><img src="img\contactpage-arrow.png" alt="">ご質問のご返答は３営業日以内にメールいたします。</p>
           <p><img src="img\contactpage-arrow.png" alt="">お問い合わせいただいた個人情報について第3者に開示また提供することはありません。</p>
           <p><img src="img\contactpage-arrow.png" alt="">お問い合わせいただいた内容は個人が特定できないようにして、よくある質問などに引用・転載する場合がございます。</p>
           <p><img src="img\contactpage-arrow.png" alt="">携帯メールを入力される場合で迷惑メールや着信拒否の設定をされている場合はraamin0908@gmail.comからのメールを受信できるように設定してください。</p>
         </div>
         <div class="phone-here">
           <p>お電話でのお問い合わせは<br class="b64">こちらから</p>
           <div class="phone-here-inner">
             <div class="phone-here-left">
               <p>脱毛サロン うるる</p>
               <a href="tel:0671810657"><img src="img\contact-phone.png" alt="電話番号">06-7181-0657</a>
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
       <h2>お問い合わせフォーム</h2>
       <?php if(!empty($_SESSION['error'])){
         echo $_SESSION['error']; }
         ?>

       <form class="" action="./backend/registerValidate.php" method="post">
         <p>お名前</p>
         <input type="text" name="name" value=<?= $name ?>>
         <p>フリガナ</p>
         <input type="text" name="kananame" value=<?= $kananame ?>>
         <p>電話番号</p>
         <input type="text" name="tel" value=<?= $tel ?>>
         <p>お悩みの部位1(もしあれば選択してください)</p>
         <select class="part1" name="part1" >
          <option value="" >---------- 選択してください ----------</option>
          <?php foreach ($destressed_parts as $key => $val) : ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
           <?php endforeach; ?>
         </select>
         <p>お悩みの部位2(もしあれば選択してください)</p>
         <select class="part2" name="part2">
           <option value="">---------- 選択してください ----------</option>
           <?php foreach ($destressed_parts as $key => $val) : ?>
          <option value="<?php echo $val; ?>"> <?php echo $val; ?></option>
           <?php endforeach; ?>
         </select>
         <p>お問い合わせ内容</p>
         <textarea name="content" rows="8" cols="80" ><?= $content ?></textarea>
         <a href="#"><input class="button" type="submit" name="" value="確認"></a>
       </form>
     </section>
   </div>
    <!-- ====================================================================

          contact2

    =================================================================== -->
    <section class="contact2">
      <div class="google-map">
       <a href="#"><img src="img\contact-map photo.png" alt=""></a>
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
  </body>
</html>
