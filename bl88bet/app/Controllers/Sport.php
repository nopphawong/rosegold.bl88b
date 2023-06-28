<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sport extends BaseController
{
    public function index()
    {
        return  $this->cv->userView('pages/sport/index', $this->headerInfo);
    }
}
