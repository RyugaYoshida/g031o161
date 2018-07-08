<?php
session_start();
 // ログイン状態チェック
 if (!isset($_SESSION["USERID"])) {
header("Location: login.php");
 exit;
 }
?>
<!DOCTYPE html>
<html>
 <head>
 <title>メインページ</title>
 </head>
 <body>
   <h1>ようこそ</h1>
 <main>
 <p>メイン</p>
 <a href="logout.php">ログアウト</a>
 </main>
 </body>
</html>
