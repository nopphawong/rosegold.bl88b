<?php

namespace App\Controllers;

class Deposit extends BaseController
{
    public function index()
    {
        return $this->cv->userView('pages/deposit/index', $this->headerInfo);
    }
}
