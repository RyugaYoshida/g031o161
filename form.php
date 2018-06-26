

<?php
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=g031o161;charset=utf8','test','9919',
		array(PDO::ATTR_EMULATE_PREPARES => false));
	}catch (PDOException $e) {
		exit('データベース接続失敗。'.$e->getMessage());
	}
?>


<!DOCTYPE html>
	<html>
	<head>
		<title>情報システム演習Ⅰ-課題2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>フォーム画面</h1>

		<form action="record.php" method="post">
			料理名：<input type = "text" name = "food_name"><br>
			カテゴリー：<input type = "text" name = "category"><br>
			塩分量[g]：<input type="number" step = "0.1" name = "amount_of_salt"><br>
			ナトリウム[g]：<input type = "number" step = "0.1" name = "sodium"><br>
			<input type = "submit" value="登録する">
	</form>
	</body>
	</html>
