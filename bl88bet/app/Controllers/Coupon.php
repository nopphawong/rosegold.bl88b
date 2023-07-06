<?php

namespace App\Controllers;

class Coupon extends home
{
    public function index()
    {
        return $this->cv->userView('pages/coupon/index', $this->headerInfo);
    }
}
