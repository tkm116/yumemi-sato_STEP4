<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>申請内容の確認</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <h1>入力内容の確認</h1>

    <?php

    $errors = [];

    if($_SERVER["REQUEST_METHOD"] ==="POST") {

     $user_name=$_POST["user_name"];
     $age=$_POST["age"];
     $phone_number=$_POST["phone_number"];
     $email_address=$_POST["email_adderess"];
     $address=$_POST["address"];
     $question=$_POST["question"];
     $gender=$_POST["gender"];
     }

    if ($user_name === "") {
        $errors[] = "名前を入力してください。";
    } elseif(!preg_match("/^[あ-んア-ン一-龠a-zA-Z]+$/u", $user_name)) {
        $errors[] = "名前はひらがな、カタカナ、漢字、英字のみ使用できます。";
    }
    
    if ($age === "") {
        $errors[] = "年齢を入力してください。";
    } elseif($age < 0 || $age > 150){
        $errors[] ="年齢は0から150の間で入力してください。";
    }
    
    if ($phone_number === "") {
        $errors[] = "電話番号を入力してください";
    } elseif(!preg_match("/^[a-zA-Z0-9-]+$/",$phone_number)){
        $errors[] ="電話番号は半角英数字とハイフンのみ使用できます。";
    }
    
    if ($email_address === "") {
        $errors[] = "メールアドレスを入力してください";
    } elseif(!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        $errors[] ="メールアドレスの形式が正しくありません。";
    }
    
    if ($address === "") {
        $errors[] = "住所を入力してください";
    } elseif(!preg_match("/^[あ-んア-ン一-龠a-zA-Z0-9-]+$/u",$address)) {
        $errors[] ="住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。";
    }


    if (!empty($errors)) {

    echo "<h2>入力内容にエラーがあります。</h2>";

    foreach ($errors as $error) {
        echo "<p>" . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . "</p>";
    }

    } else {

        echo "<h2>登録が完了しました。</h2>";

        echo "名前：" . htmlspecialchars($user_name, ENT_QUOTES, "UTF-8") . "<br>";
        echo "年齢：" . htmlspecialchars($age, ENT_QUOTES, "UTF-8") . "<br>";
        echo "電話番号：" . htmlspecialchars($phone_number, ENT_QUOTES, "UTF-8") . "<br>";
        echo "メールアドレス：" . htmlspecialchars($email_address, ENT_QUOTES, "UTF-8") . "<br>";
        echo "住所：" . htmlspecialchars($address, ENT_QUOTES, "UTF-8") . "<br>";
        echo "質問：" . htmlspecialchars($question, ENT_QUOTES, "UTF-8") . "<br>";
        echo "性別：" . htmlspecialchars($gender, ENT_QUOTES, "UTF-8") . "<br>";

        exit;
    }

    ?>

</body>