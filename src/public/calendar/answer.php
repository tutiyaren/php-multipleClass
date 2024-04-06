<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Calendars;

$calendars = filter_input(INPUT_POST, 'calendars');
try {
    $calendarObject = new Calendars($calendars);
    $calendar = $calendarObject->toCalendar()->value();
} catch(\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: index.php');
    exit();
}

?>

<body>

  <h1><?php echo $calendar; ?></h1>
  
  <a href="index.php">Top画面へ</a>

</body>
