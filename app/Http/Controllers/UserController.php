<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 13:48
 */

namespace App\Http\Controllers;


use App\Models\Address;
use App\Models\Order;
use App\Models\Soft;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth', ['only' => ['show', 'index', 'destroy', 'update']]);
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

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');

        if($user->address == null){
            $user->address()->save(new Address());
        }

        if($request->input('address') != null){
            $user->address()->update($request->input('address'));
        }

        $cart[] = [];
        $wishlist[] = [];

        array_pop($cart);
        array_pop($wishlist);

        foreach ($request->cart as $bundle){
            array_push($cart, $bundle['id']);
        }

        foreach ($request->wishlist as $bundle){
            array_push($wishlist, $bundle['id']);
        }

        $user->cart()->detach();
        $user->cart()->attach($cart);
        $user->wishlist()->sync($wishlist);

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
                $user->save();
            }

            return new JsonResponse($user);
        } else {
            return new JsonResponse(null, 204);
        }
    }
}