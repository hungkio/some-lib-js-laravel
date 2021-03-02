<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $googleDriveStorage = Storage::disk('google_drive');
//        $googleDriveStorage->put('test.txt', 'Hello world');
//        $googleDriveStorage->put('test.txt', File::get($path_file));
        return view('home');
    }
}
