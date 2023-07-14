<?php

namespace App\Controllers;

class APIService extends BaseController
{

    public function serverService($path, $method, $data)
    {
        $appid  = WEB_AGENT;
        $secret = SECRET;
        $apiurl = API_URL;
        $endpoints = [
            'm_checkexits',
            'm_bankverifyx',
            'm_registerx',
            'm_login',
            'm_sentotp',
            'm_forgetpass',
            'm_webbalance',
            'm_weblistgame',
            'm_weblogin',
            'm_uchangepass',
            'm_uwithdraw',
            'm_bankdeposit',
            'm_udeposit',
            'm_udidwidlists',
            'm_udepositlists',
            'm_uwithdrawlists',
        ];

        if (in_array($path, $endpoints)) {
            $vdata = array_merge(
                ['appid' => $appid,],
                $data
            );
        } else {
            echo 'no api';
            exit();
        }

        $seconds = round((microtime(true) * 1000));
        $vdata['time'] = $seconds;
        // print_r($vdata);
        // exit();
        $url  = $apiurl . $path;
        $hash = $this->hashdata($vdata, $secret);
        $vdata['hash'] = $hash;
        // print_r($url);
        // exit();
        $curl = $this->callApi($url, $method, json_encode($vdata));
        return $curl;
    }

    private function hashdata($array, $secret)
    {
        $array = array_change_key_case($array, CASE_LOWER);
        ksort($array);
        $rawData = '';
        foreach ($array as $Key => $Value) {
            $rawData .=  $Key . '=' . $Value . '&';
        }
        $rawData  = substr($rawData, 0, -1);

        $rawData .= $secret;

        $hash     = md5($rawData);

        return $hash;
    }

    private function callApi($url, $method = GET, $data = "", $ssl = false, $token = '')
    {
        if ($method == POST) {
            if ($data == "") return false;
        }
        $ch = curl_init();
        if ($method == GET) curl_setopt($ch, CURLOPT_URL, $url . ($data != "" ? "?" . $data : ""));
        else if ($method == POST) curl_setopt($ch, CURLOPT_URL, $url);
        if ($method == POST) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $auth = '';
        if ($token != '') {
            $auth = 'Authorization : Bearer ' . $token;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            $auth
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl);
        curl_setopt($ch, CURLOPT_TIMEOUT, 200);

        $content = curl_exec($ch);
        $info = curl_getinfo($ch);

        // debug($info);

        curl_close($ch);
        return $content;
    }
}
