<?php

namespace App\Controllers;

use App\Controllers\Home;

class Profile extends Home
{
    public function index()
    {
        return  $this->cv->userView('pages/profile/index', $this->headerInfo);
    }
}
