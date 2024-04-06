<?php
namespace App;
use Exception;

class Westerns
{
    private $western;

    public function __construct(int $western)
    {
        if($western < 0) {
            throw new exception('マイナスな時間は存在しません!');
        }
        $this->western = $western;
    }

    public function value():int
    {
        return $this->western;
    }
}
