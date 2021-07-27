<?php

namespace App\Http\Controllers\Admin\Api\Auth;

use App\Http\Controllers\Controller;

use App\Models\Admin;
use Illuminate\Http\Response;
use App\Http\Resources\RegisterResource;
use App\Http\Requests\RegisterRequest;
use function Symfony\Component\Translation\t;


class RegisterController extends Controller
{
    public function index(){
        return User::all();
    }
    public function create(RegisterRequest $request){
        $user = Admin::create([
            'first_name'=> $request->post('first_name'),
            'last_name'=>$request->post('last_name'),
            'username'=>$request->post('username'),
            'email'=>$request->post('email'),
            'address'=>$request->post('address'),
            'phone'=>$request->post('phone'),
            'password'=>bcrypt($request->post('phone')),
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;


//        return (new RegisterResource($user))
//            ->response()
//            ->setStatusCode(Response::HTTP_CREATED);
        return \response()->json([
            'assess_token' => $token,
            'token_type'=>'Bearer'
        ]);
    }
}
