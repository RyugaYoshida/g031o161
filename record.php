
<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=g031o161;charset=utf8','test','9919',
  array(PDO::ATTR_EMULATE_PREPARES => false));
  $food = $_POST['food_name'];
  $category = $_POST['category'];
  $salt = $_POST['amount_of_salt'];
  $sodium = $_POST['sodium'];


// $pdo = getDb();
$sql = 'INSERT INTO food (food_name, category, amount_of_salt,sodium)
VALUES(:food_name, :category, :amount_of_salt, :sodium)';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':food_name', $food, PDO::PARAM_STR);
$stmt->bindParam(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':amount_of_salt', $salt, PDO::PARAM_INT);
$stmt->bindValue(':sodium', $sodium, PDO::PARAM_INT);
$stmt->execute();

$stmt = $pdo->query("SELECT * FROM food");
} catch (PDOException $e) {
  exit('データベース接続失敗。'.$e->getMessage());
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>情報システム演習Ⅰ-課題２</title>
  <meta charset="utf-8">
</head>
<body>
<h1>料理一覧</h1>


<table border='1'>
  <tr><td>id<td>名前</td><td>カテゴリー</td><td>塩分量</td><td>ナトリウム量</td>
  <?php
  try {
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
    foreach($row as $key){
      echo  '<td>'.$key;
    }
    echo '</tr>';
    }
  } catch (PDOException $e) {
    exit('データベース接続失敗。'.$e->getMessage());
  }
  ?>
</table>
</body>
</html>
