<?php

namespace App\Libraries;

class CustomView
{
    /**
     * This is fuction custom web view.
     * @param string $page is view.
     * @param array $headerInfo for config in head element tag such as title.
     * @param array $viewData data in view page.
     */
    public static function webView($page, $headerInfo, $viewData = [])
    {
        $viewData['partner'] = view('layouts/web/partner');
        $viewData['footer'] = view('layouts/web/footer', $viewData);
        return view('layouts/web/header', $headerInfo) .
            view($page, $viewData);
    }

    /**
     * This is fuction custom user view (for logged in).
     * @param string $page is view.
     * @param array $headerInfo for config in head element tag such as title.
     * @param array $viewData data in view page.
     */
    public static function lobbyView($page, $headerInfo, $viewData = [])
    {
        $viewData['footer'] = view('layouts/user/footer', $viewData);
        return view('layouts/user/header', $headerInfo) .
            view($page, $viewData);
    }
}
