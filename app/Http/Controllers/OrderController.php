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
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class OrderController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth', ['only' => ['update', 'destroy', 'store']]);
    }

    public function show($id)
    {
        $order = Order::where('id', $id)->first();
        return new JsonResponse($order);
    }

    public function index()
    {
        $order = Order::all();
        return new JsonResponse($order);
    }

    public function store(Request $request){

        $user = User::find($request->input('user_id'));

        $order = new Order();

        $order->billing_firstname = $request->input('billing_firstname');
        $order->billing_lastname = $request->input('billing_lastname');
        $order->billing_road = $request->input('billing_road');
        $order->billing_city = $request->input('billing_city');
        $order->billing_country = $request->input('billing_country');
        $order->billing_zipcode = $request->input('billing_zipcode');
        $order->billing_province = $request->input('billing_province');

        $order->shipping_firstname = $request->input('shipping_firstname');
        $order->shipping_lastname = $request->input('shipping_lastname');
        $order->shipping_road = $request->input('shipping_road');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_country = $request->input('shipping_country');
        $order->shipping_zipcode = $request->input('shipping_zipcode');
        $order->shipping_province = $request->input('shipping_province');

        $bundles[] = [];

        array_pop($bundles);

        foreach ($request->bundles as $bundle){
            array_push($bundles, $bundle['id']);
        }

        $order->save();
        $order->user()->associate($user);
        $order->bundles()->sync($bundles);
        $order->save();
        $order->load(['bundles']);

        return new JsonResponse($order);
    }

    public function update(Request $request){
        $order = Order::where('id', $request->id)->first();

        $order->user_id = $request->input('user_id');
        $order->billing_address = $request->input('billing_address');
        $order->shipping_address = $request->input('shipping_address');

        $order->save();

        return new JsonResponse($order);
    }

    public function destroy($id){
        $order = Order::where('id', $id)->first();
        $order->delete();
    }
}