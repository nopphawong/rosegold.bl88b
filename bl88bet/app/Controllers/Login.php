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
                $data = transformAuthData($result->data);
                $ses_data = [
                    'data' => $data,
                    'logged_in' => TRUE
                ];
                $this->session->set($ses_data);
            }
            return $response;
        }
    }
}
