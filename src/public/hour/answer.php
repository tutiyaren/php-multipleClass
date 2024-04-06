<?php
require_once __DIR__ . '../../../vendor/autoload.php';
use App\Hours;

$hours = filter_input(INPUT_POST, 'time');
try {
    $hoursObject = new Hours($hours);
    $seconds = $hoursObject->toSeconds()->value();
} catch (\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: /index.php');
    exit();
}

?>

<body>
  
<h1><?php echo $seconds; ?></h1>

<a href="../index.php">TOPへ</a>

</body>