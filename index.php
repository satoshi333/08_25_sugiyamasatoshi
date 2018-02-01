<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>VRエアロユザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
      <div class="container-fluid"> </div>
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
        <div class="navbar-header"><a class="navbar-brand" href="select.php">ユーザ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!--疑問 action="insert.php"-->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend style="margin-left:220px;">VRエアロユザー登録</legend>
     <label style="margin-left: 80px;">氏名：<input type="text" name="name"></label><br>
     <label style="margin-left: 80px;">年齢：<input type="text" name="lid"></label><br>
     <label style="vertical-align:top;">運動プログラム：<textArea name="lpw" rows="4" cols="40"></textArea></label><br>
     <input type="radio" name="kanri_flg" value="0" style="margin-left: 130px;">一般者
     <input type="radio" name="kanri_flg" value="1">管理者<br>
     <input type="radio" name="life_flg" value="0" style="margin-left: 130px;">使用中
     <input type="radio" name="life_flg" value="1">未使用<br>
     
     <input type="submit" value="送信" style="margin-left: 300px;">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>