<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // Auth Guard.
        if (session()->logged_in) {
            $url = previous_url();
            return redirect()->to($url);
        }
        return  $this->cv->webView('pages/login/index', $this->headerInfo);
    }

    public function submit()
    {
        if ($this->request->isAJAX()) {
            $credential = [
                'user' => $this->request->getVar('login_user'),
                'pass' => $this->request->getVar('login_password'),
            ];
            $service = new APIService();
            $response = $service->serverService('m_login', POST, $credential);
            $result = json_decode($response);
            if ($result->status == 1) {
                $bank = explode('-', $result->data->bank);
                $ses_data = [
                    'userid' => $result->data->userid,
                    'name' => $result->data->name,
                    'tel' => $result->data->tel,
                    'bank' => $bank[0],
                    'bank_ac_no' => $bank[1],
                    'email' => $result->data->email,
                    'lineid' => $result->data->lineid,
                    'token' => $result->data->token,
                    'logged_in' => TRUE
                ];
                $this->session->set($ses_data);
            }
            return $response;
        }
    }
}
