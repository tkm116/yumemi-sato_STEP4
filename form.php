<!DOCTYPE html>
 <html lang="ja">
  <head>
   <meta charaset="UTF-8">
   <meta name="">
   <title>フォーム入力</title>

   <link rel="stylesheet" href="style.css">
  </head>

<body>
 <h1>フォーム入力</h1>

  <form action="confirm.php" method="POST">

  <div class="form-item">
    <label for="user_name">名前:</label>
    <input type="text" class="form" id="user_name" name="user_name">
  </div>

  <br><br>

  <div class="form-item">
    <label for="age">年齢:</label>
    <input type="text" class="form" id="age" name="age">
  </div>

  <br><br>

  <div class="form-item">
    <label for="phone_number">電話番号:</label>
    <input type="text" class="form" id="phone_number" name="phone_number">
  </div>

  <br><br>

  <div class="form-item">
    <label for="email_address">メールアドレス:</label>
    <input type="text" class="form" id="email_adderess" name="email_adderess">
  </div>

  <br><br>

  <div class="form-item">
    <label for="address">住所:</label>
    <input type="text" class="form" id="address" name="address">
  </div>

  <br><br>

  <div class="form-item">
    <label for="question">質問:</label>
    <input type="text" class="form" id="question" name="question">
  </div>

  <br><br>

  <div class="form-item">
    <label for="gender">性別：</label>
     <select id="gender" name="gender">
      <option value="">選択してください</option>
      <option value="男性">男性</option>
      <option value="女性">女性</option>
     </select>
  </div>

  <br><br>

  <button type="submit">送信</button>

</form>

</body>