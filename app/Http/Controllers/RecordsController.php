<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index()
    {
        return view('records/records');
    }

    public function add()
    {
        return view('records/add');
    }

    public function save()
    {
        echo 'Saved !';
    }
}
