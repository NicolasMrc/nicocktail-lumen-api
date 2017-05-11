<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 13:48
 */

namespace App\Http\Controllers;


use App\Models\Soft;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class SoftController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['update', 'destroy', 'store']]);
    }

    public function show($id)
    {
        $soft = Soft::where('id', $id)->first();
        return new JsonResponse($soft);
    }

    public function index()
    {
        $soft = Soft::all();
        return new JsonResponse($soft);
    }

    public function store(Request $request){

        $soft = new Soft();

        $soft->name = $request->name;
        $soft->type = $request->type;

        $soft->save();

        return new JsonResponse($soft);
    }

    public function update(Request $request){
        $soft = Soft::where('id', $request->id)->first();

        $soft->name = $request->name;
        $soft->type = $request->type;

        $soft->save();

        return new JsonResponse($soft);
    }

    public function destroy($id){
        $soft = Soft::where('id', $id)->first();
        $soft->delete();
    }
}