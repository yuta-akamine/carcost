<?php 

include(dirname ( __FILE__ ) . '/header.php'); //ヘッダーを読み込み
require_once(dirname ( __FILE__ ) . '/functions.php'); //エスケープ処理を読み込み

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');

$username = h($username);
$password = h($password);
$email = h($email);

// 非表示にする処理。$passwordの文字数を取得し、その回数『*』を出力
$hiddenPassword = str_repeat('*', strlen($password));

// ローカル環境ではOK。Herokuでデプロイ後、異常ありのため、変更
// $hiddenPassword = str_repeat('*', mb_strlen($password));

echo '<h2>ユーザー登録確認</h2>';

// スペース入力拒否条件分岐必要
if ($username === '' || $username === ' ') {
  echo 'ユーザー名が入力されていません。<br>';
}

if ($password === '') {
  echo 'パスワードが入力されていません。<br>';
}

if ($email === '') {
  echo 'メールアドレスが入力されていません。<br>';
}

// // 英字、ひらがな、カタカナ、漢字以外入力を受け付けない。
// if ($username) {
//  echo '英字、ひらがな、カタカナ、漢字以外が入力されています。';
// }

if($username === '' || $username === ' ' || $password === '' || $email === '' ) {
  echo '戻って再度入力を確認してください。<br>';
  echo '<form>';
  echo '<input type="button" onclick="history.back()" class="btn btn-outline-dark topspace" value="戻る">';
  echo '</form>';
  
} else {

  echo "<p>ユーザー名: $username</p>";
  echo "<p>パスワード: $hiddenPassword</p>";
  echo "<p>メールアドレス: $email</p>";
  echo '<form action="thanks.php" method="POST">';
  echo '<input name="username" type="hidden" value="'.$username.'">';
  echo '<input name="password" type="hidden" value="'.$password.'">';
  echo '<input name="email" type="hidden" value="'.$email.'">';
  echo '<input type="button" onclick="history.back()" class="btn btn-outline-dark" value="戻る">';
  echo '<button type="submit" class="btn btn-outline-dark">OK</button>';
  echo '</form>';
  
  }
  
?>