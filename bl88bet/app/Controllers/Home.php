<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return  $this->cv->userView('pages/home/index', $this->headerInfo);
    }

    public function casinoPage()
    {
        return  $this->cv->userView('pages/casino/index', $this->headerInfo);
    }

    public function slotPage()
    {
        return  $this->cv->userView('pages/slot/index', $this->headerInfo);
    }

    public function sportPage()
    {
        return  $this->cv->userView('pages/sport/index', $this->headerInfo);
    }

    public function profilePage()
    {
        return  $this->cv->userView('pages/profile/index', $this->headerInfo);
    }

    public function promotionPage()
    {

        return  $this->cv->userView('pages/promotion/index', $this->headerInfo);
    }

    public function historyWithdrawPage()
    {
        return  $this->cv->userView('pages/history_withdraw/index', $this->headerInfo);
    }

    public function rewardPage()
    {
        return  $this->cv->userView('pages/reward/index', $this->headerInfo);
    }

    public function logout()
    {
        $this->session->destroy();
    }
}
