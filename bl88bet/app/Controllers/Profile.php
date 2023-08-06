<?php

namespace App\Controllers;

class Profile extends Home
{
    public function index()
    {
        return  $this->cv->lobbyView('pages/profile/index', $this->headerInfo);
    }
}
