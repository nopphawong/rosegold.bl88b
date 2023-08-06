<?php

namespace App\Controllers;

class Withdraw extends Home
{
    public function index()
    {
        return $this->cv->lobbyView('pages/withdraw/index', $this->headerInfo);
    }

    public function submit()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'web' => session()->data->web,
                'webuser' => session()->data->webuser,
                'amount' => number_format($this->request->getVar('withdraw_amount'), 2),
            ];
            // print_r($body);
            // exit();
            $service = new APIService();
            $response = $service->serverService('m_uwithdraw', POST, $body);
            $result = json_decode($response);

            return $response;
        }
    }
}
