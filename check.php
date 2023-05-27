<?php 

include(dirname ( __FILE__ ) . '/header.php'); //ヘッダーを読み込み
require_once(dirname ( __FILE__ ) . '/functions.php'); //エスケープ処理を読み込み
// require_once('../carcost/functions.php'); //エスケープ処理を読み込み

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');

$username = h($username);
$password = h($password);
$email = h($email);

// 非表示にする処理。$passwordの文字数を取得し、その回数『*』を出力
$hiddenPassword = str_repeat('*', mb_strlen($password));

echo '<h2>ユーザー登録確認</h2>';

// スペース入力拒否パターン
if ($username === '') {
  echo 'ユーザー名が入力されていません。<br>';
} else {
  echo "<p>ユーザー名: $username</p>";
}

if ($password === '') {
  echo 'パスワードが入力されていません。<br>';
} else {
  echo "<p>パスワード: $hiddenPassword</p>";
}

if ($email === '') {
  echo 'メールアドレスが入力されていません。<br>';
} else {
  echo "<p>メールアドレス: $email</p>";
}

if($username === '' || $password === '' || $email === '' ) {
  
  echo '<form>';
  echo '<input type="button" onclick="history.back()" value="戻る">';
  // echo '<button type="submit" onclick="history.back()">戻る</button>';
  echo '</form>';
  
} else {
  // echo '<input type="button" onclick="history.back()" value="戻る">';
  echo '<form action="thanks.php" method="POST">';
  echo '<input name="username" type="hidden" value="'.$username.'">';
  echo '<input name="password" type="hidden" value="'.$password.'">';
  echo '<input name="email" type="hidden" value="'.$email.'">';
  echo '<input type="button" onclick="history.back()" class="btn btn-outline-dark" value="戻る">';
  echo '<button type="submit" class="btn btn-outline-dark">OK</button>';
  echo '</form>';
  
  }
  
  
  ?>