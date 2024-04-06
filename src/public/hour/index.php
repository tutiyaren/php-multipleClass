<?php
session_start();
$errorMessage = $_SESSEION['errorMessage'] ?? '';
unset($_SESSION['errorMessage']);
?>

<body>

<h1>時間から秒に変換しよう</h1>

<p><?php echo $errorMessage; ?></p>

<form action="answer.php" method="post">

    <div>
        <span>時間（時）</span>
        <input type="number" name="time" placeholder="時">
    </div>
    <input type="submit" value="何秒か確認してみよう">

</form>

<a href="../index.php">TOPへ</a>

</body>
