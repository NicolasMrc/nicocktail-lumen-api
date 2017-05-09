<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 13:48
 */

namespace App\Http\Controllers;


use App\Models\Alcohol;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AlcoholController extends Controller
{
    public function show($id)
    {
        $alcohol = Alcohol::where('id', $id)->first();
        return new JsonResponse($alcohol);
    }

    public function index()
    {
        $alcohol = Alcohol::all();
        return new JsonResponse($alcohol);
    }

    public function store(Request $request){

        $alcohol = new Alcohol();

        $alcohol->name = $request->name;
        $alcohol->degree = $request->degree;

        $alcohol->save();

        return new JsonResponse($alcohol);
    }

    public function update(Request $request){
        $alcohol = Alcohol::where('id', $request->id)->first();

        $alcohol->name = $request->name;
        $alcohol->degree = $request->degree;

        $alcohol->save();

        return new JsonResponse($alcohol);
    }

    public function destroy($id){
        $alcohol = Alcohol::where('id', $id)->first();
        $alcohol->delete();
    }
}