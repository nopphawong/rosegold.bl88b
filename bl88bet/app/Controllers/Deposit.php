<?php

namespace App\Controllers;

class Deposit extends Home
{
    public function index()
    {
        $body = [
            'user' => session()->data->userid,
            'token' => session()->data->token,
            'web' => session()->data->web,
        ];
        $service = new APIService();
        $response = $service->serverService('m_bankdeposit', POST, $body);
        $result = json_decode($response);
        $this->viewData['result'] = $result;
        return $this->cv->userView('pages/deposit/index', $this->headerInfo, $this->viewData);
    }

    public function submit()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'web' => session()->data->web,
                'webuser' => session()->data->webuser,
                'amount' => number_format($this->request->getVar('deposit_amount'), 2),
                'frombankid' => session()->data->bankid,
                'frombankno' => session()->data->bankno,
                'tobankid' => $this->request->getVar('bankid'),
                'tobankno' => $this->request->getVar('bankno'),
            ];
            $service = new APIService();
            $response = $service->serverService('m_udeposit', POST, $body);
            $result = json_decode($response);
            return $response;
        }
    }
}
