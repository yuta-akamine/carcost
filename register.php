<?php

include('../carcost/header.php'); //ヘッダーを読み込み

?>

<form action="check.php" method="post">
<label for="username">ユーザー名を入力してください。</label><br>
  <input name="username" type="text" style="width:200px" id="username" placeholder="例) コスパ 太郎" required><br><br>
  <label for="password">パスワードを入力してください。</label><br>
  <input name="password" type="password" style="width:200px" id="password" required><br><br>
  <label for="email">メールアドレスを入力してください。</label><br>
  <input name="email" type="email" style="width:200px" id="email" placeholder="例) kosupa@gmail.com" required><br><br>
  <br>
  
  <p>
    <button type="submit">登録する</button> <!-- <input type="submit">から変更 -->
    <button type="reset">リセット</button><br>
    <a href="index.php">
      <button type="button">トップページへ</button>
    </a>
  </p>
</form>


<?php

include('../carcost/footer.php'); //フッターを読み込み -->