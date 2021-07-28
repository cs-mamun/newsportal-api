<?php

namespace App\Http\Controllers\Admin\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = Admin::where('email',$request->post('email'))->first();

        if (!$user || !Hash::check($request->post('password'),$user->password)) {
            return response([
                'message'=>'not done',
            ],401);
        }
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);
    }
}
