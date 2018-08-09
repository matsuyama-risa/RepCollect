<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\Mail\Mailer;

class UserController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth', ['except' => 'getConfirm']);
        $this->user = Auth::user();
    }

    public function index()
    {
        return view('auth.profile')
            ->with(compact('user'));
    }


}
