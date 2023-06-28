<?php

namespace App\Controllers;

class Home extends BaseController
{
    // NOTE: Session logged in.
    // "data": {
    //   "userid": "0840476308",
    //   "name": "นาย ณัฐ นพวงค์",
    //   "tel": "0840476308",
    //   "email": "",
    //   "lineid": "0840476308",
    //   "bank": "KBANK-0343740646",
    //   "token": "b97323fc07fd866ee9b9096651e3f4e8",
    //   "web": "BL88",
    //   "webag": "AG059",
    //   "webuser": "FAA0083",
    //   "webpass": "BaXXYy219",
    //   "tovtoday": "0.00",
    //   "tovwid": "0.00",
    //   "tovwiddate": "0000-00-00 00:00:00"
    // }

    public function index()
    {
        $body = [
            'user' => session()->data->userid,
            'token' => session()->data->token,
            'web' => session()->data->web,
            'webuser' => session()->data->webuser,
        ];
        $service = new APIService();
        $response = $service->serverService('m_webbalance', POST, $body);
        $result = json_decode($response);
        if ($result->status) {
            $this->session->set(['webbalance' => $result->data->webbalance]);
        }
        // {
        //     "status": true,
        //     "msg": "",
        //     "data": {
        //       "web": "BL88",
        //       "webuser": "FAA0083",
        //       "webbalance": 0
        //     }
        //   }
        $this->viewData['result'] = $result;
        return  $this->cv->userView('pages/home/index', $this->headerInfo, $this->viewData);
    }

    public function profilePage()
    {
        return  $this->cv->userView('pages/profile/index', $this->headerInfo);
    }

    public function promotionPage()
    {

        return  $this->cv->userView('pages/promotion/index', $this->headerInfo);
    }

    public function historyWithdrawPage()
    {
        return  $this->cv->userView('pages/history_withdraw/index', $this->headerInfo);
    }

    public function rewardPage()
    {
        return  $this->cv->userView('pages/reward/index', $this->headerInfo);
    }

    public function playgame()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'web' => session()->data->web,
                'webuser' => session()->data->webuser,
                'webpass' => session()->data->webpass,
                'webgame' => $this->request->getVar('game_code'),
            ];
            $service = new APIService();
            $response = $service->serverService('m_weblogin', POST, $body);

            return $response;
        }
    }

    public function logout()
    {
        $this->session->destroy();
    }
}
