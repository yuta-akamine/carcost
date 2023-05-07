<?php 

include('../carcost/header.php'); //ヘッダーを読み込み
require_once('../carcost/functions.php'); //エスケープ処理を読み込み

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');

$username = htmlspecialchars($username);
$password = htmlspecialchars($password);
$email = htmlspecialchars($email);

// 非表示にする処理。$passwordの文字数を取得し、その回数『*』を出力
$hiddenPassword = str_repeat('*', strlen($password));

echo '<h2>ユーザー登録確認</h2>';

echo "<p>ユーザー名: $username</p>";
echo "<p>パスワード: $hiddenPassword</p>";
echo "<p>メールアドレス: $email</p>";

echo '<input type="button" onclick="history.back()" value="戻る">';
// echo '<button type="submit" onclick="history.back()">戻る</button>';
echo '<button type="submit">OK</button>';

// if ($username === '') {
//   echo 'ユーザー名が入力されていません。<br>';
// } else {
//   echo "<p>ユーザー名: $username</p>";
// }

// if ($password === '') {
//   echo 'パスワードが入力されていません。<br>';
// } else {
//   echo "<p>パスワード: $hiddenPassword</p>";
// }

// if ($email === '') {
//   echo 'メールアドレスが入力されていません。<br>';
// } else {
//   echo "<p>メールアドレス: $email</p>";
// }

// if($username === '' || $password === '' || $email === '' ) {

//   echo'<form>';
//   echo'<input type="button" onclick="history.back()" value="戻る">';
//   // echo'<button type="submit" onclick="history.back()">戻る</button>';
//   echo'</form>';
  
// } else {
  
//   echo '<form action="thanks.php" method="post">';
//   echo '<input name="username" type="hidden" value="'.$username.'">';
//   echo '<input name="password" type="hidden" value="'.$password.'">';
//   echo '<input name="email" type="hidden" value="'.$email.'"><br>';
//   echo '<input type="button" onclick="history.back()" value="戻る">';
//   // echo '<button type="submit" onclick="history.back()">戻る</button>';
//   echo '<button type="submit">OK</button>';
//   echo '</form>';

// }

include('../carcost/footer.php'); //フッターを読み込み

?>