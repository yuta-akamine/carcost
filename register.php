<?php

include('../carcost/header.php'); //ヘッダーを読み込み

?>

<h2>ユーザー登録</h2>

<form action="check.php" method="post">
<!-- Laravel用 -->
<!-- @csrf -->

<label for="username">ユーザー名を入力してください。</label><br>
  <input name="username" type="text" style="width:200px" id="username" placeholder="例) コスパ 太郎" autofocus required><br><br>
  <label for="password">パスワードを入力してください。</label><br>
  <input name="password" type="password" style="width:200px" id="password" required><br><br>
  <label for="email">メールアドレスを入力してください。</label><br>
  <input name="email" type="email" style="width:200px" id="email" placeholder="例) kosupa@gmail.com" required><br><br>
  <br>
  
  <p>
    <button type="submit">登録する</button>
    <button type="reset">リセット</button><br>
    <a href="index.php">
      <button type="button">トップページへ</button>
    </a>
  </p>
</form>