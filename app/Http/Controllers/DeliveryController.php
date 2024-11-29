<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index()
    {
        $delivery = Delivery::paginate(2);
        return view('delivery', compact('delivery'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $delivery = new Delivery;
        $delivery->package_description = $request->input('package_description');
        $delivery->package_length = $request->input('package_length');
        $delivery->package_height = $request->input('package_height');
        $delivery->package_width = $request->input('package_width');
        $delivery->package_weight = $request->input('package_weight');
        $delivery->pickup_address = $request->input('pickup_address');
        $delivery->pickup_name = $request->input('pickup_name');
        $delivery->pickup_telephone = $request->input('pickup_telephone');
        $delivery->pickup_email = $request->input('pickup_email');
        $delivery->delivery_address = $request->input('delivery_address');
        $delivery->delivery_name = $request->input('delivery_name');
        $delivery->delivery_telephone = $request->input('delivery_telephone');
        $delivery->delivery_email = $request->input('delivery_email');
        $delivery->type_of_good = $request->input('type_of_good');
        $delivery->delivery_provider = $request->input('delivery_provider');
        $delivery->delivery_priority = $request->input('delivery_priority');
        $delivery->shipment_pickup_date = $request->input('shipment_pickup_date');
        $delivery->shipment_pickup_time = $request->input('shipment_pickup_time');
        $delivery->status = 1;
        $delivery->created_at = new \DateTime;
        $delivery->save();

        return redirect()->route('allDelivery');
    }

    // public function cancel($id)
    // {
    //     $delivery = Delivery::where('id', $id)->find($id);
    //     $delivery->status = 4;
    //     $delivery->save();
    //     return redirect()->route('allDelivery');
    // }
}
