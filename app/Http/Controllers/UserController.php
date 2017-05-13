<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 13:48
 */

namespace App\Http\Controllers;


use App\Models\Soft;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['show', 'index', 'destroy', 'update']]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return new JsonResponse($user);
    }

    public function index()
    {
        $user = User::all();
        return new JsonResponse($user);
    }

    public function store(Request $request){

        $user = new User();

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return new JsonResponse($user);
    }

    public function update(Request $request){
        $user = User::where('id', $request->id)->first();

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;

        $user->save();

        return new JsonResponse($user);
    }

    public function destroy($id){
        $user = User::where('id', $id)->first();
        $user->delete();
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if($user && $user->password == $request->password){

            if($user->role == 'admin'){
                $user->api_token = str_random(32);
            }

            $user->save();

            return new JsonResponse($user);
        } else {
            return new JsonResponse(null, 204);
        }
    }
}