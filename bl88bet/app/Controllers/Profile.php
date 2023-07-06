<?php

namespace App\Controllers;

class Profile extends Home
{
    public function index()
    {
        return  $this->cv->userView('pages/profile/index', $this->headerInfo);
    }
}
