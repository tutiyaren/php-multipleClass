<?php

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone_number = filter_input(INPUT_POST, 'phone_number');

if (empty($name) || empty($email) || empty($phone_number)) {
    $message =
        '<p>「予約者名」「Email」「電話番号」のどれかが記入されていません！</p>';
}

if (!empty($name) && !empty($email) && !empty($phone_number)) {
    $dsn = 'mysql:host=mysql; dbname=bookingform; charset=utf8';
    $dbUser = 'root';
    $dbPassword = 'password';
    $pdo = new PDO($dsn, $dbUser, $dbPassword);

    $sql =
        'INSERT INTO bookings (name, email, phone_number) VALUES (:name, :email, :phone_number)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->execute();

    $message = '<h2>予約完了^ ^</h2>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約完了ページ</title>
</head>
<body>
  <?php echo $message; ?>
  <a href="./index.php">
    <p>予約画面へ</p>
  </a>
</body>
</html>