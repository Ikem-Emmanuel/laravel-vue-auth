<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{
     public function __invoke(Request $request)
    {
        $v = Validator::make($request->all(), [
            'fullname' => 'required|min:3',
            'username' => 'required|min:3',
            'role' => 'required',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:6',
        ]);
        if ($v->fails())
        {
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }
        $user = new User();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['status' => 'success'], 200);
    }
}
