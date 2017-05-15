<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 09/05/2017
 * Time: 13:48
 */

namespace App\Http\Controllers;

use App\Models\Alcohol;
use App\Models\Bundle;
use App\Models\Extra;
use App\Models\Soft;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class BundleController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth', ['only' => ['update', 'destroy', 'store']]);
    }

    public function show($id)
    {
        $bundle = Bundle::where('id', $id)->first();
        return new JsonResponse($bundle);
    }

    public function index()
    {
        $bundles = Bundle::all();
        return new JsonResponse($bundles);
    }

    public function store(Request $request){

        $bundle = new Bundle();

        $bundle->name = $request->name;
        $bundle->description = $request->description;
        $bundle->image = $request->image;
        $bundle->save();

        foreach ($request->softs as $soft){
            $newSoft = Soft::where('id', $soft['id'])->first();
            $bundle->softs()->syncWithoutDetaching([$newSoft->id]);
        }

        foreach ($request->alcohols as $alcohol){
            $newAlcohol = Alcohol::where('id', $alcohol['id'])->first();
            $bundle->alcohols()->syncWithoutDetaching([$newAlcohol->id]);
        }

        foreach ($request->extras as $extra){
            $newExtra = Extra::where('id', $extra['id'])->first();
            $bundle->extras()->syncWithoutDetaching([$newExtra->id]);
        }

        $bundle->save();

        return new JsonResponse($bundle);
    }

    public function update(Request $request){
        $bundle = Bundle::where('id', $request->id)->first();

        $bundle->name = $request->name;
        $bundle->description = $request->description;
        $bundle->image = $request->image;

        $softsIds[] = [];
        $alcoholsIds[] = [];
        $extrasIds[] = [];

        array_pop($softsIds);
        array_pop($alcoholsIds);
        array_pop($extrasIds);

        foreach ($request->softs as $soft){
            array_push($softsIds, $soft['id']);
        }

        foreach ($request->alcohols as $alcohol){
            array_push($alcoholsIds, $alcohol['id']);
        }

        foreach ($request->extras as $extra){
            array_push($extrasIds, $extra['id']);
        }

        $bundle->softs()->sync($softsIds);
        $bundle->alcohols()->sync($alcoholsIds);
        $bundle->extras()->sync($extrasIds);

        $bundle->save();

        return new JsonResponse($bundle);
    }

    public function destroy($id){
        $bundle = Bundle::where('id', $id)->first();
        $bundle->delete();
    }
}