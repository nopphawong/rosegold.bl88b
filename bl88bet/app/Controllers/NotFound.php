<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class NotFound extends BaseController
{
    public function index()
    {
        $url = previous_url();
        return redirect()->to($url);
    }
}
