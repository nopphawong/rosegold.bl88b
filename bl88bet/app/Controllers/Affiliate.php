<?php

namespace App\Controllers;

class Affiliate extends BaseController
{
    public function index()
    {
        return $this->cv->userView('pages/affiliate/index', $this->headerInfo);
    }
}
