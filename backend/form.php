<?php

$form = [
        'name' => ['type' => 'text', 'required' => true, 'namejp' => '名前'],
        'kananame' => ['type'=>'text', 'required' => true, 'namejp' => 'フリガナ'],
        'tel' => ['type'=>'num', 'required' => true,'namejp' => '電話番号'],
        'email' => ['type'=>'text', 'required' => true,'namejp' => 'メールアドレス'],
        'parts1' => ['type'=>'select', 'required' => false,'namejp' => 'お悩みの部位1'],
        'parts2' => ['type'=>'select', 'required' => false,'namejp' => 'お悩みの部位2'], 
        'content' => ['type'=>'text', 'required' => true,'namejp' => 'お問い合わせ内容'],        
];

