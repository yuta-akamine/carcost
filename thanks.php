<?php

include(dirname ( __FILE__ ) . '/header.php'); //ヘッダーを読み込み
require_once(dirname ( __FILE__ ) . '/functions.php'); //エスケープ処理を読み込み

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');

$username = h($username);
$password = h($password);
$email = h($email);

// データ受け取りテスト用
// echo $username . '様' .'<br>';
// echo 'パスワード受け取りテスト：' . $password .'<br>';
// echo 'メールアドレス受け取りテスト:' . $email .'<br>';


// サーバー接続問題ありの場合
echo '<h2>ただいま障害発生により正常に登録を完了することができませんでした。</h2>';
echo '<p>ご迷惑をおかけして大変申し訳ございません。<br>復旧までしばらくお待ちください。<br></p>';
echo '<p>復旧後に再度ユーザー登録をお願いいたします。</p>';


// サーバー接続問題なしの場合(本番環境でテスト必要)

// デコード表示テスト用
// html_entity_decode($username, ENT_QUOTES, "UTF-8");
// echo $username . '<br>';

// echo '<h2>' . $username . '様ありがとうございます。ユーザー登録が無事完了しました。</h2>';
// echo $email . 'にメールをお送りしましたのでご確認ください。<br>';
// $mail_sub = 'ユーザー登録を受け付けました。'; //メールタイトル
// $mail_body = $username . "様\nユーザー登録ありがとうございます。"; //送信するメール本文の内容。改行のためダブルクォーテーション
// $mail_body = html_entity_decode( $mail_body, ENT_QUOTES, "UTF-8"); //名前をデコードし代入
// $mail_head = 'From:******@gmail.com'; //Fromの後は自動メール送信者である自分のアドレスを記載
// mb_language('Japanese');
// mb_internal_encoding("UTF-8");
// mb_send_mail( $email, $mail_sub, $mail_body, $mail_head); //メールを送信する命令

?>
<p class="space"></p>
<a href="index.php">
  <button type="button" class="btn btn-outline-dark">トップページへ</button>
</a>