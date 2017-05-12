<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 13:48
 */

namespace App\Http\Controllers;

use App\Models\Bundle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class BundleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['update', 'destroy', 'store']]);
    }

    public function show($id)
    {
        $bundle = Bundle::where('id', $id)->first();
        return new JsonResponse($bundle);
    }

    public function index()
    {
        $bundle = Bundle::all();
        return new JsonResponse($bundle);
    }

    public function store(Request $request){

        $bundle = new Bundle();

        $bundle->name = $request->name;
        $bundle->description = $request->description;

        $bundle->save();

        return new JsonResponse($bundle);
    }

    public function update(Request $request){
        $bundle = Bundle::where('id', $request->id)->first();

        $bundle->name = $request->name;
        $bundle->description = $request->description;

        $bundle->save();

        return new JsonResponse($bundle);
    }

    public function destroy($id){
        $bundle = Bundle::where('id', $id)->first();
        $bundle->delete();
    }
}