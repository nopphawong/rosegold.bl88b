<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Casino extends BaseController
{
    public function index()
    {
        return  $this->cv->userView('pages/casino/index', $this->headerInfo);
    }
}
