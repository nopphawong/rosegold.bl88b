<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function index()
    {
        $locale = $this->request->getLocale();
        $this->session->remove('lang');
        $this->session->set('lang', $locale);
        $url = previous_url();
        return redirect()->to($url);
    }
}
