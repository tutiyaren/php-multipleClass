<?php
session_start();
$message = $_SESSION['message'] ?? '';
unset($_SESSION['errors']);
?>

<body>

<h1>分を秒に変換しよう</h1>

<p><?php echo $message; ?></p>

  <form action="./awnser.php" method="post">

    <table>

      <tr>
        <td><p>時間(分)</p></td>
        <td><p><input type="text" name="time" placeholder="分"></p></td>
      </tr>

    </table>

    <input type="submit" value="何秒か確認してみよう"> 

  </form>

  <a href="../index.php">Topへ</a>

</body>
