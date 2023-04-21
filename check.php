<?php

include('../carcost/header.php'); //ヘッダーを読み込み
require_once('../carcost/functions.php'); //エスケープ処理を読み込み

$totalcost = filter_input(INPUT_POST, 'totalcost'); //$_POST[''];の記述から変更
$lifespan = filter_input(INPUT_POST, 'lifespan'); //$_POST[''];の記述から変更
$Modelyear = filter_input(INPUT_POST, 'Modelyear'); //$_POST[''];の記述から変更
$unit1 = filter_input(INPUT_POST, 'unit1'); //$_POST[''];の記述から変更
$unit2 = filter_input(INPUT_POST, 'unit2'); //$_POST[''];の記述から変更
$unit3 = filter_input(INPUT_POST, 'unit3'); //$_POST[''];の記述から変更

// エスケープ処理テスト用
// $virus = filter_input(INPUT_POST, 'virus'); //$_POST[''];の記述から変更
// $virus = h($virus);
// print $virus;

$totalcost = h($totalcost);//エスケープ処理
$lifespan = h($lifespan);//エスケープ処理
$Modelyear = h($Modelyear);//エスケープ処理

if($Modelyear == '') {
  $Modelyear = 0;
}

//カンマ入り数値と全角数字のtrue判定の対応が必要
if (is_numeric($totalcost) AND is_numeric($lifespan) AND is_numeric($Modelyear)) {
  print'購入した場合、1' .$unit2. 'あたりの購入単価は';
  print $unit4;
  print $totalcost/($lifespan-$Modelyear);
  print $unit1.'です<br>';
  print '<input type="button" onclick="history.back()" value="戻る">';
} else  {
  print '数値を入力してください。<br>';
  print '戻って再度確認してください。';
  print '<input type="button" onclick="history.back()" value="戻る">';

}

include('../carcost/footer.php'); //フッターを読み込み