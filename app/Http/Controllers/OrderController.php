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

        $order = new Order();

        $order->user_id = $request->input('user_id');

        $order->save();

        $shippingAddress = new Address();
        $shippingAddress->road = $request->input('billing_address.road');
        $shippingAddress->country = $request->input('billing_address.country');
        $shippingAddress->city = $request->input('billing_address.city');
        $shippingAddress->province = $request->input('billing_address.province');
        $shippingAddress->zipcode = $request->input('billing_address.zipcode');
        $shippingAddress->order_id = $order->id;

        $billingAddress = new Address();
        $billingAddress->road = $request->input('billing_address.road');
        $billingAddress->country = $request->input('billing_address.country');
        $billingAddress->city = $request->input('billing_address.city');
        $billingAddress->province = $request->input('billing_address.province');
        $billingAddress->zipcode = $request->input('billing_address.zipcode');
        $billingAddress->order_id = $order->id;

        $shippingAddress->save();
        $shippingAddress->save();


        $order->save();

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