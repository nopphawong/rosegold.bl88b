<?php

namespace App\Controllers;

class Coupon extends BaseController
{
    public function index()
    {
        return $this->cv->userView('pages/coupon/index', $this->headerInfo);
    }
}
