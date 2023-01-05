<?php
//【重要】
/**
 * DB接続のための関数をfuncs.phpに用意
 * require_onceでfuncs.phpを取得
 * 関数を使えるようにする。
 */
require_once('funcs.php');
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table_0107;");

// 実行する
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit('SQLError:' . print_r($error, true));
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $view .= '<p>';
    $view .= '<a href="detail.php?id=' . $result['id'] . '">';
    $view .= "{$result['indate']} : {$result['name']}"; // 文字列は、ダブルクオーテーション利用すると変数展開可能
    $view .= '</a>';
    $view .= '</p>';

    // $view .= '<p>';
    // $view .='<a href="detail.php?id=' .  h($result['id'])  . '">';
    // $view .= h($result['indate']) . '：' . h($result['name']);
    // $view .='</a>';

    // $view .='<a href="delete.php?id=' .  h($result['id'])  . ' ">';
    // $view .= '[ 削除 ]';
    // $view .='</a>';


    // $view .= '</p>';




    // $name   = h($result['name']);
    // $name_kana  = h($result['name_kana']);
    // $sex    = h($result['sex']);
    // $birthday = h($result['birthday']);
    // $postal_code   = h($result['postal_code']);
    // $address  = h($result['address']);
    // $map    = h($result['map']);
    // $phone_number = h($result['phone_number']);
    // $email   = h($result['email']);
    // $primary_school = h($result['primary_school']);
    // $parent_name   = h($result['parent_name']);
    // $parent_kana = h($result['parent_kana']);
    // $workplace   = h($result['workplace']);
    // $workplace_phone_number  = h($result['workplace_phone_number']);
    // $parent_phone_number    = h($result['parent_phone_number']);
    // $health_level = h($result['health_level']);
    // $club   = h($result['club']);
    // $request  = h($result['request']);

    // $view .= "
    // <tr>
    //   <td>{$name}</td>
    //   <td>{$name_kana}</td>
    //   <td>{$sex}</td>
    //   <td>{$birthday}</td>
    //   <td>{$postal_code}</td>
    //   <td>{$address}</td>
    //   <td>{$map}</td>
    //   <td>{$phone_number}</td>
    //   <td>{$email}</td>
    //   <td>{$primary_school}</td>
    //   <td>{$parent_name}</td>
    //   <td>{$parent_kana}</td>
    //   <td>{$workplace}</td>
    //   <td>{$workplace_phone_number}</td>
    //   <td>{$parent_phone_number}</td>
    //   <td>{$health_level}</td>
    //   <td>{$club}</td>
    //   <td>{$request}</td>
    // </tr>
    // ";
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<div>
        <div class="container jumbotron">
            <?= $view ?>
        </div>
    </div>

<!-- Main[Start] -->
<!-- <table class="form-table">
      <tr>
        <td style="width:400px">名前</td>
        <td style="width:400px">かな</td>
        <td style="width:400px">性別</td>
        <td style="width:400px">生年月日</td>
        <td style="width:400px">郵便番号</td>
        <td style="width:400px">住所</td>
        <td style="width:400px">地図</td>
        <td style="width:400px">電馬番号</td>
        <td style="width:400px">メールアドレス</td>
        <td style="width:400px">出身小学校</td>
        <td style="width:400px">保護者氏名</td>
        <td style="width:400px">保護者氏名（かな）</td>
        <td style="width:400px">勤務先</td>
        <td style="width:400px">勤務先TEL</td>
        <td style="width:400px">保護者携帯番号</td>
        <td style="width:400px">健康状況</td>
        <td style="width:400px">クラブ活動・習い事</td>
        <td style="width:400px">保護者コメント</td>

      </tr>
</table>  -->


<!-- Main[End] -->

</body>
</html>