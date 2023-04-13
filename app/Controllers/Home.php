<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $locale = $this->request->getLocale();
        $params = [$locale,''];
        return view('welcome_message',$params);
    }
}
