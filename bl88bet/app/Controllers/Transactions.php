<?php

namespace App\Controllers;

class Transactions extends Home
{
    public function index()
    {
        return  $this->cv->userView('pages/transactions_history/index', $this->headerInfo);
    }
}
