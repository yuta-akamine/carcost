<?php

include('../carcost/header.php'); //ヘッダーを読み込み

?>
<p>火災保険や車代などの比較的大きな出費から<br>
日用品や食品など様々なコスパの計算ができます。</p>
<h2>指定した条件の購入単価は？</h2>
<form method="post" action="check.php">

  <input name="totalcost" type="text" style="width:60px" placeholder="0" required>

  <select  name="unit1">
    <option value="円">円</option>
    <option value="万円">万円</option>
  </select>

  ÷(

  <input name="lifespan" type="text" style="width:40px" placeholder="0" required>

  <select  name="unit2">
    <option value="年">年</option>
    <option value="ヶ月">ヶ月</option>
    <option value="枚">枚</option>
    <option value="個">個</option>
    <option value="リットル">リットル</option>
    <option value="m">m</option>
    <option value="g">g</option>
  </select>
  
  -

  <!-- 算術演算子は代入不可？ -->
  <!-- <select  name="unit4">
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select> -->

  <input name="Modelyear" type="text" placeholder="任意" style="width:40px">
  <select  name="unit3">
    <option value="年">年</option>
    <option value="ヶ月">ヶ月</option>
  </select>
  )=計算結果へ<br>
  <!-- 総額÷(耐用年数-年式)=1年あたりの購入単価<br> -->
  
  <!-- エスケープ処理テスト用
  <br>ウィルステスト<br>ここに悪意のある攻撃を仕掛けてください<br>
  <input name="virus" type="text" style="width:100px"><br> -->
  <p>
    <button type="submit">計算する</button> <!-- <input type="submit">から変更 -->
  </p>
</form>

<?php

include('../carcost/footer.php'); //フッターを読み込み