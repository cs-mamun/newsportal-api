<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\RegisterResource;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class RegisterController extends Controller
{
    public function index(){
        return User::all();
    }
    public function register(RegisterRequest $request){
        $user = User::create($request->all());
        return (new RegisterResource($user))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }
}
