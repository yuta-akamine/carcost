<?php

include('../carcost/header.php'); //ヘッダーを読み込み

?>

<h2>ユーザー登録</h2>

<form action="check.php" method="post">
<!-- Laravel用 -->
<!-- @csrf -->


<!-- ユーザー名など左寄せが必要 </div>class container -->
  <label for="username">ユーザー名<span class="badge bg-danger">必須</span></label><br>
  <input name="username" type="text" style="width:200px" id="username" placeholder="例) コスパ 太郎" autofocus required><br><br>
  <label for="password">パスワード<span class="badge bg-danger">必須</span></label><br>
  <input name="password" type="password" style="width:200px" id="password" required><br><br>
  <label for="email">メールアドレス<span class="badge bg-danger">必須</span></label><br>
  <input name="email" type="email" style="width:200px" id="email" placeholder="例) kosupa@gmail.com" required><br><br>
  <br>

  <p>
    <button type="submit" class="btn btn-outline-dark">登録する</button>
    <button type="reset" class="btn btn-outline-dark">リセット</button><br>
    <a href="index.php">
      <button type="button" class="btn btn-outline-dark">トップページへ</button>
    </a>
  </p>
</form>