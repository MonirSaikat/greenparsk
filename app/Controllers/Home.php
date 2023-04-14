<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $setting = model('Settings')->first();
        $services = model('Service')->findAll();
        $featured_project = model('Project')->where('is_featured', 1)->first();

        return view('pages/home', compact('setting', 'services', 'featured_project'));
    }
}
