<?php
namespace App;
use App\Seconds;
use Exception;

class Hours{

    private $hours;

    public function __construct(int $hours)
    {
        if($hours < 0) {
            throw new Exception('マイナスな時間は存在しません!');
        }
        $this->hours = $hours;
    }

    public function toSeconds(): Seconds
    {
        $seconds = $this->hours * 3600;
        return new Seconds($seconds);
    }

}