<?php 

include('../carcost/header.php'); //ヘッダーを読み込み
require_once('../carcost/functions.php'); //エスケープ処理を読み込み

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

?>
<h2>ありがとうございます。ユーザー登録が無事完了しました。</h2>

<?php 
echo $email . 'にメールをお送りしましたのでご確認ください。<br>';
?>
<p class="space"><br></p>
<a href="index.php">
  <button type="button" class="btn btn-outline-dark">トップページへ</button>
</a>