<?php

include('../carcost/header.php'); //ヘッダーを読み込み

?>

<h2>車を購入した場合の1年あたりの購入単価は？</h2>
<form method="post" action="check.php">
  <input name="totalcost" type="text" placeholder="例 300" style="width:40px">
  万円÷(
  <input name="lifespan" type="text" placeholder="例  13" style="width:40px">年 -
  <input name="Modelyear" type="text" placeholder="例   4" style="width:40px">年)=1年あたりの購入単価<br>
  車体総額÷(耐用年数-購入時年式)=1年あたりの購入単価<br>
  
  <!-- エスケープ処理テスト用
  <br>ウィルステスト<br>ここに悪意のある攻撃を仕掛けてください<br>
  <input name="virus" type="text" style="width:100px"><br> -->
    
  <button type="submit">計算する</button> <!-- <input type="submit">から変更 -->
</form>

<?php

include('../carcost/footer.php'); //フッターを読み込み