<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>

<body>

  <form action="../Controller/booking.php" method="post">

    <table>

      <tr>
        <td><p>予約者名</p></td>
        <td><p><input type="text" name="name" placeholder="予約者名"></p></td>
      </tr>

      <tr>
        <td><p>Email</p></td>
        <td><p><input type="text" name="email" placeholder="email"></p></td>
      </tr>

      <tr>
        <td><p>電話番号</p></td>
        <td><p><input type="text" name="phone_number" placeholder="電話番号"></p></td>
      </tr>

    </table>

    <input type="submit" value="送信"> 

  </form>

</body>

</html>