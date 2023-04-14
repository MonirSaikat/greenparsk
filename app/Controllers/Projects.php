<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Projects extends BaseController
{
    public function index()
    {
        return view('projects/index');
    }

    public function view($id)
    {
        $project = model('Project')->where('id', $id)->first();

        return view('projects/view', compact('project'));
    }
}
