<?php

include('../carcost/header.php'); //ヘッダーを読み込み

?>

        <p>保険や車代などの比較的大きな出費から<br>
        日用品や食品など様々なコスパの計算ができます。</p>
        <h2>指定した条件の購入単価は？</h2>
        <p style="color:red">カンマをいれず半角数字のみを入力してください</p>
        <form method="post" action="calculation.php">

          <!-- Laravel用 -->
          <!-- @csrf -->

          <!-- 計算式1 -->
          <input name="totalcost1" type="text" style="width:60px" placeholder="0" required>
          
          <select id="select1_1" name="select1_1" onchange="syncSelection1_1()">
            <option value="円">円</option>
            <option value="万円">万円</option>
          </select>
          
          ÷(
            
            <input name="unitprice1_1" type="text" style="width:40px" placeholder="0" required>
            
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
            
          <input name="unitprice1_2" type="text" placeholder="任意" style="width:40px">
          <select  name="unit3">
            <option value="年">年</option>
            <option value="ヶ月">ヶ月</option>
          </select>
          )=計算結果へ<br>
        
          <!-- 計算式2 -->
          <input name="totalcost2" type="text" style="width:60px" placeholder="0" required>
          
          <select id="select1_2" name="select1_2" onchange="syncSelection1_2()">
            <option value="円">円</option>
            <option value="万円">万円</option>
          </select>
          
          ÷(
            
            <input name="unitprice2_1" type="text" style="width:40px" placeholder="0" required>
            
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
          
          <input name="unitprice2_2" type="text" placeholder="任意" style="width:40px">
          <select  name="unit3">
            <option value="年">年</option>
            <option value="ヶ月">ヶ月</option>
          </select>
          )=計算結果へ<br>

          <!-- 単位を統一する -->
          <script>
            function syncSelection1_1() {
              const select1_1 = document.getElementById("select1_1");
              const select1_2 = document.getElementById("select1_2");
              select1_2.value = select1_1.value;
            }

            function syncSelection1_2() {
              const select1_1 = document.getElementById("select1_1");
              const select1_2 = document.getElementById("select1_2");
              select1_1.value = select1_2.value;
            }
          </script>

          <!-- エスケープ処理テスト用
          <br>XSSテスト<br>悪意のある攻撃を仕掛けます<br>
          <input name="virus" type="text" style="width:100px"><br> -->
          <p>
            <button type="submit">計算する</button> <!-- <input type="submit">から変更 -->
            <button type="reset">リセット</button>
          </p>
        </form>

        <p>検索情報を保存したい方はこちら
          <a href="register.php">
            <button type="button" class="btnRegister">ユーザー登録</button>
          </a>
        </p>
<?php

include('../carcost/footer.php'); //フッターを読み込み -->