<?php

namespace App\Controllers;

class Transactions extends Home
{
    public function index()
    {
        $body = [
            'user' => session()->data->userid,
            'token' => session()->data->token,
            'web' => session()->data->web,
        ];
        $service = new APIService();
        $response = $service->serverService('m_udidwidlists', POST, $body);
        $result = json_decode($response);
        $this->viewData['result'] = $result;
        // print_r($result);
        // exit();
        return $this->cv->userView('pages/transactions_history/index', $this->headerInfo, $this->viewData);
    }

    public function getAll()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'web' => session()->data->web,
            ];
            $service = new APIService();
            $response = $service->serverService('m_udidwidlists', POST, $body);
            return $response;
        }
    }

    public function getDeposit()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'web' => session()->data->web,
            ];
            $service = new APIService();
            $response = $service->serverService('m_udepositlists', POST, $body);
            return $response;
        }
    }

    public function getWithdraw()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'web' => session()->data->web,
            ];
            $service = new APIService();
            $response = $service->serverService('m_uwithdrawlists', POST, $body);
            return $response;
        }
    }
}
