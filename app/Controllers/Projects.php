<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Projects extends BaseController
{
    public function index()
    {
        $projects = model('Project')->findAll();

        return view('projects/index', compact('projects'));
    }

    public function view($id)
    {
        $project = model('Project')->where('id', $id)->first();

        return view('projects/view', compact('project'));
    }
}
