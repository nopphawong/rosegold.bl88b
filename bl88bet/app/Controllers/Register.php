<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        // Auth Guard.
        if (session()->logged_in) {
            $url = previous_url();
            return redirect()->to($url);
        }
        return  $this->cv->webView('pages/register/phone_number_form', $this->headerInfo);
    }

    // NOTE: Backup.
    public function submit()
    {
        if ($this->request->is(POST)) {
            $bankAccountID = $this->request->getVar('register_bankidx');
            $bankAccountNo = $this->request->getVar('register_bankno');
            $bankAccountName = $this->request->getVar('register_bank_account_name');
            // echo "<script>console.log('bankAccountID: " . json_encode($bankAccountID) . "');</script>";
            // Check Form. 
            if (!isset($bankAccountID) && !isset($bankAccountNo)) {
                $rules = [
                    'register_user' => [
                        'rules' => 'required|min_length[10]|numeric',
                        'errors' => [
                            'required' => lang('Lang.register.username_is_required'),
                            'min_length' => lang('Lang.register.username_is_required'),
                            'numeric' => lang('Lang.register.username_is_numeric')
                        ]
                    ]
                ];

                if (!$this->validate($rules)) {
                    $this->viewData['validation'] = $this->validator;
                    return  $this->cv->webView('pages/register/phone_number_form', $this->headerInfo, $this->viewData);
                }

                return  $this->cv->webView('pages/register/bank_form', $this->headerInfo);
            } else if (!isset($bankAccountName)) {
                $rules = [
                    'register_user' => [
                        'rules' => 'required|min_length[10]|numeric',
                        'errors' => [
                            'required' => lang('Lang.register.username_is_required'),
                            'min_length' => lang('Lang.register.username_is_required'),
                            'numeric' => lang('Lang.register.username_is_numeric')
                        ]
                    ],
                    'register_bankno' => [
                        'rules' => 'required|numeric',
                        'errors' => [
                            'required' => lang('Lang.register.bankno_is_required'),
                            'numeric' => lang('Lang.register.bankno_is_numeric')
                        ]
                    ],
                ];

                if (!$this->validate($rules)) {
                    $this->viewData['validation'] = $this->validator;
                    return  $this->cv->webView('pages/register/bank_form', $this->headerInfo, $this->viewData);
                }

                $verifBankData = [
                    'accno' => trimReplace('-', '', $bankAccountNo),
                    'bankid' => $bankAccountID
                ];

                $service = new APIService();
                $response = $service->serverService('m_bankverifyx', POST, $verifBankData);
                $result = json_decode($response);
                $this->viewData['result'] = $result;
                if ($result->status != 1) {
                    return  $this->cv->webView('pages/register/bank_form', $this->headerInfo, $this->viewData);
                }
                return  $this->cv->webView('pages/register/account_form', $this->headerInfo, $this->viewData);
            } else {
                $rules = [
                    'register_user' => [
                        'rules' => 'required|min_length[10]|numeric',
                        'errors' => [
                            'required' => lang('Lang.register.username_is_required'),
                            'min_length' => lang('Lang.register.username_is_required'),
                            'numeric' => lang('Lang.register.username_is_numeric')
                        ]
                    ],
                    'register_bankno' => [
                        'rules' => 'required|numeric',
                        'errors' => [
                            'required' => lang('Lang.register.bankno_is_required'),
                            'numeric' => lang('Lang.register.bankno_is_numeric')
                        ]
                    ],
                    'register_password' => [
                        'rules' => 'required|min_length[6]|alpha_numeric',
                        'errors' => [
                            'required' => lang('Lang.register.password_is_required'),
                            'min_length' => lang('Lang.register.password_is_min_length'),
                            'alpha_numeric' => lang('Lang.register.password_is_alpha_numeric')
                        ]
                    ],
                    'register_repassword' => [
                        'rules' => 'required|matches[register_password]',
                        'errors' => [
                            'required' => lang('Lang.register.repassword_is_required'),
                            'matches' => lang('Lang.register.repassword_is_matches')
                        ]
                    ],
                ];

                if (!$this->validate($rules)) {
                    $this->viewData['validation'] = $this->validator;
                    return  $this->cv->webView('pages/register/account_form', $this->headerInfo, $this->viewData);
                }


                $user = trim($this->request->getVar('register_user'));
                $pass = trim($this->request->getVar('register_password'));
                $name = $this->request->getVar('register_bank_account_name');

                $body = [
                    'user' => $user,
                    'pass' => $pass,
                    'name' => $name,
                    'bankid' => $bankAccountID,
                    'bankno' => trimReplace('-', '', $bankAccountNo),
                    'otpcode' => '123456',
                    'otpref' => 'PDFDA'
                ];

                $service = new APIService();
                $response = $service->serverService('m_registerx', POST, $body);
                $result = json_decode($response);
                $this->viewData['result'] = $result;

                if ($result->status != 1) {
                    return $this->cv->webView('pages/register/account_form', $this->headerInfo, $this->viewData);
                }

                $credential = [
                    'user' => $user,
                    'pass' => $pass,
                ];
                $service = new APIService();
                $response = $service->serverService('m_login', POST, $credential);
                $result = json_decode($response);
                $this->viewData['result'] = $result;

                if ($result->status != 1) {
                    return $this->cv->webView('pages/register/account_form', $this->headerInfo, $this->viewData);
                }

                $data = transformAuthData($result->data);
                $ses_data = [
                    'data' => $data,
                    'logged_in' => TRUE
                ];
                $this->session->set($ses_data);

                $ses_flashdata = [
                    'register_title' => lang('Lang.register.title_succeed'),
                    'register_text' => lang('Lang.register.text_succeed'),
                ];
                $this->session->setFlashdata($ses_flashdata);
                return redirect()->to('');
            }
        }
    }
}
