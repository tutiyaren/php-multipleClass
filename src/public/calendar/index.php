<?php
session_start();
$errorMessage = $_SESSION['errorMessage'] ?? "";
unset($_SESSION['errorMessage']);

?>

<body>
  
<h1>和暦(令和)から西暦に変換しよう</h1>

<p><?php echo $errorMessage ?></p>

<form action="answer.php" method="post">

<span>和暦（令和）</span>
<input type="number" name="calendars" placeholder="令和n年">

<div>
    <input type="submit" value="西暦何年か確認しよう">
</div>


</form>

<a href="../index.php">Topへ</a>

</body>