<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>家庭環境調べ</legend>
                <label>生徒氏名：<input type="text" name="name"></label><br>
                <label>ふりがな：<input type="text" name="name_kana"></label><br>
                <label>性別：
                    <select name="sex">
                      <option value="">  </option>
                      <option value="男">男</option>
                      <option value="女">女</option>
                      <option value="その他">その他</option>
                    </select>
                <label>生年月日：<input type="date" name="birthday"></label><br>
                <label>郵便番号：<input type="text" name="postal_code"></label><br>
                <label>現住所：<input type="text" name="address"></label><br>
                <!-- <label><a href=map.php>地図を開いてピン止め</a>：<input type="text" name="map"></label><br> -->
                <label>連絡先：<input type="text" name="phone_number"></label><br>
                <label>連絡先メールアドレス：<input type="text" name="email"></label><br>
                <label>出身小学校：<input type="text" name="primary_school"></label><br>
                <label>保護者（１）氏名：<input type="text" name="parent_name"></label><br>
                <label>ふりがな：<input type="text" name="parent_kana"></label><br>
                <label>勤務先：<input type="text" name="workplace"></label><br>
                <label>勤務先TEL：<input type="text" name="workplace_phone_number"></label><br>
                <label>携帯：<input type="text" name="parent_phone_number"></label><br>
                <label>身体状況：<input type="text" name="health_level"></label><br>
                <label>習い事・クラブ活動等：<input type="text" name="club"></label><br>
                <label>保護者の要望：<input type="text" name="request"></label><br>

                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>