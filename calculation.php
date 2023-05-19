<?php

include('../carcost/header.php'); //ヘッダーを読み込み
require_once('../carcost/functions.php'); //エスケープ処理を読み込み

//formから上の値を取得
$totalCost1 = filter_input(INPUT_POST, 'totalcost1');
$unitPrice1_1 = filter_input(INPUT_POST, 'unitprice1_1');
$unitPrice1_2 = filter_input(INPUT_POST, 'unitprice1_2');

//formから下の値を取得
$totalCost2 = filter_input(INPUT_POST, 'totalcost2');
$unitPrice2_1 = filter_input(INPUT_POST, 'unitprice2_1');
$unitPrice2_2 = filter_input(INPUT_POST, 'unitprice2_2');

$select1_1 = filter_input(INPUT_POST, 'select1_1');
$unit2 = filter_input(INPUT_POST, 'unit2');
$unit3 = filter_input(INPUT_POST, 'unit3');

// エスケープ処理テスト用
// $virus = filter_input(INPUT_POST, 'virus');
// $virus = h($virus);
// echo $virus;

//エスケープ処理
$totalCost1 = h($totalCost1);
$unitPrice1_1 = h($unitPrice1_1);
$unitPrice1_2 = h($unitPrice1_2);

//比較二つ名
$totalCost2 = h($totalCost2);
$unitPrice2_1 = h($unitPrice2_1);
$unitPrice2_2 = h($unitPrice2_2);

$select1_1 = h($select1_1);
$unit2 = h($unit2);
$unit3 = h($unit3);

//空入力なら0を代入
if($unitPrice1_2 == '') {
  $unitPrice1_2 = 0;
}

//比較二つ目
if($unitPrice2_2 == '') {
  $unitPrice2_2 = 0;
}

//カンマ入り数値と全角数字のtrue判定の対応が必要
if (is_numeric($totalCost1) AND is_numeric($unitPrice1_1) AND is_numeric($unitPrice1_2) AND is_numeric($totalCost2) AND is_numeric($unitPrice2_1) AND is_numeric($unitPrice2_2)) {
  echo'1' .$unit2. 'あたりの購入単価は';
  // echo $unit4;
  echo $totalCost1/($unitPrice1_1-$unitPrice1_2);
  echo $select1_1.'です<br>';

  //比較二つ目
  echo'1' .$unit2. 'あたりの購入単価は';
  // echo $unit4;
  echo $totalCost2/($unitPrice2_1-$unitPrice2_2);
  echo $select1_1.'です<br>';


  echo '<button type="submit" onclick="history.back()" class="btn btn-outline-dark">戻る</button>';

} else  {
  echo '半角数字を入力してください。<br>';
  echo '戻って再度入力を確認してください。<br>';
  echo '<button type="submit" onclick="history.back()" class="btn btn-outline-dark"">戻る</button>';
}

include('../carcost/footer.php'); //フッターを読み込み

?>