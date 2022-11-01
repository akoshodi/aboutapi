<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileApiController extends Controller
{
    public function index()
    {
        $data = Profile::all('slackUsername', 'backend','age','bio')->first();

        return response($data, 200)
            ->header('Content-Type', 'application/json');
    }
}
