<?php
namespace App;
use Exception;
use App\Westerns;

class Calendars
{
    private $calendars;

    public function __construct(int $calendars)
    {
        if($calendars < 0) {
            throw new exception('マイナスな時間は存在しません!');
        }
        $this->calendars = $calendars;
    }

    public function toCalendar(): Westerns
    {
        $western = $this->calendars + 2018;
        return new Westerns($western);
    }
}
