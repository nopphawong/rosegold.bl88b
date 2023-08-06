<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LuckyWheel extends BaseController
{
    public function index()
    {
        return $this->cv->lobbyView('pages/lucky_wheel/index', $this->headerInfo);
    }
}
