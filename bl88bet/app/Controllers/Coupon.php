<?php

namespace App\Controllers;

class Coupon extends Home
{
    public function index()
    {
        return $this->cv->lobbyView('pages/coupon/index', $this->headerInfo);
    }
}
