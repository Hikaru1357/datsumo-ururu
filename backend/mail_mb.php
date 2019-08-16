<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");
 
 $to = 'takubon3140@gmail.com';
 $title = "practice";
 $content = 'testです';
 $option= "From:".mb_encode_mimeheader("送信者2")."<takubon3140@gmail.com>";
 if(mb_send_mail($to, $title, $content, $option)){
 echo "メールを送信しました";
 } else {
 echo "メールの送信に失敗しました";
 }