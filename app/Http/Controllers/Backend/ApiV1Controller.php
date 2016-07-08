<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\ApiV1\getRandomPin;

class ApiV1Controller extends Controller
{

    use getRandomPin;
}
