<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    const moduleDirectory = 'admin.jobs.';
    public function index()
    {

        return view(self::moduleDirectory . 'index', );
    }

    public function create()
    {

        return view(self::moduleDirectory . 'create', );
    }
}
