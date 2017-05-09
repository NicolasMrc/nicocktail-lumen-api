<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 13:48
 */

namespace App\Http\Controllers;


use App\Models\Extra;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ExtraController extends Controller
{
    public function show($id)
    {
        $extra = Extra::where('id', $id)->first();
        return new JsonResponse($extra);
    }

    public function index()
    {
        $extra = Extra::all();
        return new JsonResponse($extra);
    }

    public function store(Request $request){

        $extra = new Extra();

        $extra->name = $request->name;
        $extra->price = $request->price;

        $extra->save();

        return new JsonResponse($extra);
    }

    public function update(Request $request){
        $extra = Extra::where('id', $request->id)->first();

        $extra->name = $request->name;
        $extra->price = $request->price;

        $extra->save();

        return new JsonResponse($extra);
    }

    public function destroy($id){
        $extra = Extra::where('id', $id)->first();
        $extra->delete();
    }
}