<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TemplateController extends BaseController
{
    public function index()
    {
        return view('home/arsha');
    }
}  
