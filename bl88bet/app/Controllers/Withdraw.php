<?php

namespace App\Controllers;

class Withdraw extends BaseController
{
    public function index()
    {
        return $this->cv->userView('pages/withdraw/index', $this->headerInfo);
    }
}
