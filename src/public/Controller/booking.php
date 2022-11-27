<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Model\Bookings;

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone_number = filter_input(INPUT_POST, 'phone_number');

session_start();
if (empty($name) || empty($email) || empty($phone_number)) {
    $_SESSION['message'] =
        '「予約者名」「Email」「電話番号」のどれかが記入されていません！';
    header('Location: ../View/complete.php');
    exit();
}

$bookings = new Bookings();
$bookings->create($name, $email, $phone_number);

$_SESSION['message'] = '予約完了^ ^';
header('Location: ../View/complete.php');
exit();
?>
