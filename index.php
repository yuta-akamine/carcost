<?php

include(dirname ( __FILE__ ) . '/header.php'); //ヘッダーを読み込み

?>

<div class="row">

  <div class="col-md-3">
  </div>

  <div class="col-md-6">

    <p>保険や車代などの比較的大きな出費から<br>
    日用品や食品など様々なコスパの計算ができます。</p>
    <h2>指定した条件の購入単価は？</h2>
    <p style="color:red">カンマをいれず半角数字のみを入力してください</p>

<!-- アプリの使い方説明 -->
    <details>

      <summary>
        このサイトの使い方の例を見る
      </summary>

      <p class="textleft">(例)中古車を購入したいが、製造から15年を超えたら車を買い替えたい。<br>
      ①総額100万円で3年落ちの車を購入し、12年後に買い替える場合<br>
      ②総額80万円で5年落ちの車を購入し、10年後に買い替える場合<br>
      1年あたりの購入単価を計算した場合、どちらがお得か比較したい</p>

      <details>
        <summary class="textleft">
          商品1の入力手順
        </summary>
        <ol class="bottomspace textleft">
          <li>左の枠へ【100】を入力し単位は【万円】を選択する</li>
          <li>真ん中の枠へ【15】を入力し単位は【年】を選択する</li>
          <li>右側の枠へ【3】を入力し単位は【年】を選択する</li>
        </ol>
      </details>

      <details>
        <summary class="textleft">
          商品2の入力手順
        </summary>
        <ol class="textleft">
          <li>左の枠へ【80】を入力し単位は【万円】を選択する</li>
          <li>真ん中の枠へ【15】を入力し単位は【年】を選択する</li>
          <li>右側の枠へ【5】を入力し単位は【年】を選択する</li>
          <li>【計算する】をクリックすると結果が表示されます</li>
        </ol>
      </details>

    </details>

  </div>  <!-- <div class="col-md-6"> -->

  <div class="col-md-3">
  </div>

</div>  <div class="row">


<form method="POST" action="calculation.php">

  <!-- Laravel用 -->
  <!-- @csrf -->

  <!-- 商品1の計算式 -->
  <p class="topspace">
  商品1:
  <input name="totalcost1" type="text" style="width:60px" placeholder="0" autofocus required>
  
  <select id="select1_1" name="select1_1" onchange="syncSelection1_1()">
    <option value="円">円</option>
    <option value="万円">万円</option>
  </select>
  
  ÷(
    
    <input name="unitprice1_1" type="text" style="width:40px" placeholder="0" required>
    
    <select id="select2_1" name="unit2" onchange="syncSelection2_1()">
      <option value="年">年</option>
      <option value="ヶ月">ヶ月</option>
      <option value="枚">枚</option>
      <option value="個">個</option>
      <option value="リットル">リットル</option>
      <option value="k">k</option>
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
    
  <input name="unitprice1_2" type="text" placeholder="任意" style="width:40px">
  <select id="select3_1" name="unit3" onchange="syncSelection3_1()">
    <option value="年">年</option>
    <option value="ヶ月">ヶ月</option>
    <option value="k">k</option>
  </select>
  )=計算結果へ<br>
  </p>

  <!-- 商品2の計算式 -->
  商品2:
  <input name="totalcost2" type="text" style="width:60px" placeholder="0" required>
  
  <select id="select1_2" name="select1_2" onchange="syncSelection1_2()">
    <option value="円">円</option>
    <option value="万円">万円</option>
  </select>
  
  ÷(
    
    <input name="unitprice2_1" type="text" style="width:40px" placeholder="0" required>
    
    <select id="select2_2" name="unit2" onchange="syncSelection2_2()">
    <option value="年">年</option>
    <option value="ヶ月">ヶ月</option>
    <option value="枚">枚</option>
    <option value="個">個</option>
    <option value="リットル">リットル</option>
    <option value="k">k</option>
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
  
  <input name="unitprice2_2" type="text" placeholder="任意" style="width:40px">
  <select id="select3_2" name="unit3" onchange="syncSelection3_2()">
    <option value="年">年</option>
    <option value="ヶ月">ヶ月</option>
    <option value="k">k</option>
  </select>
  )=計算結果へ

  <!-- 商品1と商品2の単位を統一 -->
  <script src="syncSelection.js">
    // 'use strict';

    // function syncSelection1_1() {
    //   const select1_1 = document.getElementById("select1_1");
    //   const select1_2 = document.getElementById("select1_2");
    //   select1_2.value = select1_1.value;
    // }

    // function syncSelection1_2() {
    //   const select1_1 = document.getElementById("select1_1");
    //   const select1_2 = document.getElementById("select1_2");
    //   select1_1.value = select1_2.value;
    // }

    // function syncSelection2_1() {
    //   const select2_1 = document.getElementById("select2_1");
    //   const select2_2 = document.getElementById("select2_2");
    //   select2_2.value = select2_1.value;
    // }

    // function syncSelection2_2() {
    //   const select2_1 = document.getElementById("select2_1");
    //   const select2_2 = document.getElementById("select2_2");
    //   select2_1.value = select2_2.value;
    // }
    // function syncSelection3_1() {
    //   const select3_1 = document.getElementById("select3_1");
    //   const select3_2 = document.getElementById("select3_2");
    //   select3_2.value = select3_1.value;
    // }

    // function syncSelection3_2() {
    //   const select3_1 = document.getElementById("select3_1");
    //   const select3_2 = document.getElementById("select3_2");
    //   select3_1.value = select3_2.value;
    // }
  </script>

  <!-- エスケープ処理テスト用
  <br>XSSテスト<br>悪意のある攻撃を仕掛けます<br>
  <input name="virus" type="text" style="width:100px"><br> -->

  <p class="topspace">
    <button type="submit" class="btn btn-outline-dark">計算する</button> <!-- <input type="submit">から変更 -->
    <button type="reset" class="btn btn-outline-dark">リセット</button>
  </p>
  
</form>

<?php

include(dirname ( __FILE__ ) . '/footer.php'); //フッターを読み込み -->