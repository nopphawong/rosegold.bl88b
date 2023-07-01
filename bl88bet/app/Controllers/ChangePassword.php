<?php

namespace App\Controllers;

use App\Controllers\Home;

class ChangePassword extends Home
{
    public function index()
    {
        return  $this->cv->userView('pages/change_password/index', $this->headerInfo);
    }

    public function submit()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'oldpass' => $this->request->getVar('change_pass_current_password'),
                'newpass' => $this->request->getVar('change_pass_new_password')

            ];
            $service = new APIService();
            $response = $service->serverService('m_uchangepass', POST, $body);
            return $response;
        }
    }
}
