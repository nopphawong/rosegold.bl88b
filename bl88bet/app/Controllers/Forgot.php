<?php

namespace App\Controllers;

class Forgot extends BaseController
{
    public function index()
    {
        echo '<script>localStorage.clear("kCountdown")</script>';
        return $this->cv->webView('pages/forgot/index', $this->headerInfo);
    }

    public function requestOtp()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => $this->request->getVar('forgot_user')
            ];
            $service = new APIService();
            $response = $service->serverService('m_checkexits', POST, $body);
            $result = json_decode($response);

            if ($result->status) {
                $result = [
                    'status' => false,
                    'msg' => 'notfound',
                    'data' => [],
                ];
                return json_encode($result);
            }

            $body = [
                'tel' => $this->request->getVar('forgot_user')
            ];
            $response = $service->serverService('m_sentotp', POST, $body);
            return $response;
        }
    }

    public function resetPassword()
    {
        if ($this->request->is(GET)) {
            $body = [
                'user' => $this->request->getVar('user'),
                'otpref' => $this->request->getVar('otpref')
            ];

            if (!$body['user'] || !$body['otpref']) return redirect()->to('forgot');

            $this->viewData = array_merge($this->viewData, $body);
            return $this->cv->webView('pages/forgot/repass', $this->headerInfo, $this->viewData);
        }
    }

    public function submit()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => $this->request->getVar('forgot_user'),
                'otpref' => $this->request->getVar('otpref'),
                'otpcode' => $this->request->getVar('forgot_otp'),
                'pass' => $this->request->getVar('forgot_password')

            ];
            $service = new APIService();
            $response = $service->serverService('m_forgetpass', POST, $body);
            return $response;
        }
    }
}
