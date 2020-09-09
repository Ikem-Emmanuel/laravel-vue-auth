<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function __invoke(Request $request)
    {
        $user = $request->user();

        return response() -> json([
            'fullname'=>$user->fullname,
            'username'=>$user->username,
            'email'=>$user->email,
            'role'=>$user->role,
        ]);
    }
}
