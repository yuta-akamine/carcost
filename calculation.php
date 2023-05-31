<?php

include(dirname ( __FILE__ ) . '/header.php'); //ヘッダーを読み込み
require_once(dirname ( __FILE__ ) . '/functions.php'); //エスケープ処理を読み込み

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
//比較対象1
$totalCost1 = h($totalCost1);
$unitPrice1_1 = h($unitPrice1_1);
$unitPrice1_2 = h($unitPrice1_2);

//比較対象2
$totalCost2 = h($totalCost2);
$unitPrice2_1 = h($unitPrice2_1);
$unitPrice2_2 = h($unitPrice2_2);

$select1_1 = h($select1_1);
$unit2 = h($unit2);
$unit3 = h($unit3);

//空入力なら0を代入
//比較対象1
if($unitPrice1_2 == '') {
  $unitPrice1_2 = 0;
}

//比較対象2
if($unitPrice2_2 == '') {
  $unitPrice2_2 = 0;
}

//カンマ入り数値と全角数字のtrue判定の対応が必要
if (is_numeric($totalCost1) AND is_numeric($unitPrice1_1) AND is_numeric($unitPrice1_2) AND is_numeric($totalCost2) AND is_numeric($unitPrice2_1) AND is_numeric($unitPrice2_2)) {

  // チェック中
  // 計算結果の値を代入する
  // const RESULT1 = $totalCost1/($unitPrice1_1-$unitPrice1_2);
  // const RESULT2 = $totalCost2/($unitPrice2_1-$unitPrice2_2);

  // 出力テスト
  // echo RESULT1;
  // echo RESULT2;

  // コスパが良い方の結果を表示する
  // if (RESULT1 < RESULT2) {
  //   echo "<h2>商品1がお得です!!</h2>";
  // } elseif (RESULT1 > RESULT2) {
  //   echo "<h2>商品2がお得です!!</h2>";
  // } elseif (RESULT1 = RESULT2) {
  //   echo "<h2>商品1と商品2のコスパに差はありません。</h2>";
  // }

  echo '商品1: 1' .$unit2. 'あたりの購入単価は';
  // echo $unit4;
  echo $totalCost1/($unitPrice1_1-$unitPrice1_2);
  echo $select1_1.'です<br>';

  //比較二つ目
  echo '商品2: 1' .$unit2. 'あたりの購入単価は';
  // echo $unit4;
  echo $totalCost2/($unitPrice2_1-$unitPrice2_2);
  echo $select1_1.'です<br>';
  echo '<button type="submit" onclick="history.back()" class="btn btn-outline-dark space">戻る</button>';

} else  {
  echo '半角数字を入力してください。<br>';
  echo '戻って再度入力を確認してください。<br>';
  echo '<button type="submit" onclick="history.back()" class="btn btn-outline-dark space">戻る</button>';
}

include(dirname ( __FILE__ ) . '/footer.php'); //フッターを読み込み -->

?>