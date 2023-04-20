<?php

include('../carcost/header.php'); //ヘッダーを読み込み
require_once('../carcost/functions.php');//エスケープ処理を読み込み

// エスケープ処理テスト用
// $virus = filter_input(INPUT_POST, 'virus'); //$_POST[''];の記述から変更
// $virus = h($virus);
// print $virus;

$totalcost = filter_input(INPUT_POST, 'totalcost'); //$_POST[''];の記述から変更
$lifespan = filter_input(INPUT_POST, 'lifespan'); //$_POST[''];の記述から変更
$Modelyear = filter_input(INPUT_POST, 'Modelyear'); //$_POST[''];の記述から変更

$totalcost = h($totalcost);
$lifespan = h($lifespan);
$Modelyear = h($Modelyear);

//数字以外のエラーもはきたいけど処理がうまくいかない。
if ($totalcost == '' or $lifespan == '' or $Modelyear == '') {
  print '値が入力されていない箇所があります。<br>';
  print '戻って再度確認してください。<br>';
  print '<input type="button" onclick="history.back()" value="戻る">';
} else {
  print'購入した場合の1年間あたりの購入単価は';
  print $totalcost/($lifespan-$Modelyear);
  print'万円です<br>';

  
  print '<br><input type="button" onclick="history.back()" value="戻る"';
}
// if (is_numeric($totalcost or $lifespan or $Modelyear)) {
  //   print '数値以外が入力されている箇所があります。<br>';
  //   print '戻って再度確認してください。';
  //   print '<input type="button" onclick="history.back()" value="戻る">';
?>

<?php

include('../carcost/footer.php'); //フッターを読み込み