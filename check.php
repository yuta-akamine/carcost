<?php

include('../carcost/header.php'); //ヘッダーを読み込み
require_once('../carcost/functions.php'); //エスケープ処理を読み込み


$totalcost = filter_input(INPUT_POST, 'totalcost');
$lifespan = filter_input(INPUT_POST, 'lifespan');
$Modelyear = filter_input(INPUT_POST, 'Modelyear');
$unit1 = filter_input(INPUT_POST, 'unit1');
$unit2 = filter_input(INPUT_POST, 'unit2');
$unit3 = filter_input(INPUT_POST, 'unit3');

// エスケープ処理テスト用
// $virus = filter_input(INPUT_POST, 'virus');
// $virus = h($virus);
// echo $virus;

//エスケープ処理
$totalcost = h($totalcost);
$lifespan = h($lifespan);
$Modelyear = h($Modelyear);
$unit1 = h($unit1);
$unit2 = h($unit2);
$unit3 = h($$unit3);

//空入力なら0を代入
if($Modelyear == '') {
  $Modelyear = 0;
}

//カンマ入り数値と全角数字のtrue判定の対応が必要
if (is_numeric($totalcost) AND is_numeric($lifespan) AND is_numeric($Modelyear)) {
  echo'1' .$unit2. 'あたりの購入単価は';
  // echo $unit4;
  echo $totalcost/($lifespan-$Modelyear);
  echo $unit1.'です<br>';
  // echo '<input type="button" onclick="history.back()" value="戻る">';
  echo '<button type="submit" onclick="history.back()">戻る</button>';
} else  {
  echo '半角数字を入力してください。<br>';
  echo '戻って再度入力を確認してください。<br>';
  // echo '<input type="button" onclick="history.back()" value="戻る">';
  echo '<button type="submit" onclick="history.back()">戻る</button>';
}

include('../carcost/footer.php'); //フッターを読み込み

?>