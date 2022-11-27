<?php
session_start();
$message = $_SESSION['message'] ?? '';
unset($_SESSION['errors']);
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