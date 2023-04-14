<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function about_us()
    {
        $about_us = model('Settings')->first()->site_about_us;

        return view('pages/about_us', compact('about_us'));
    }
}
