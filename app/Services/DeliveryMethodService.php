<?php

namespace App\Services;

use App\Http\Requests\StoreDelivery_methodRequest;
use App\Models\Category;
use App\Models\Delivery_method;

class DeliveryMethodService
{
    public function insert(StoreDelivery_methodRequest $request)
    {
        $method = new Delivery_method();
        $method->fill($request->validated());
        $method->save();
        return $method;
    }
    public function index(){
        return Delivery_method::all();
    }
    public function byId($id){
        $delivery = Delivery_method::findOrFail($id);
        return $delivery;
    }
    public function destroy($id){
        $method = $this->byId($id);
        $method->delete();
    }
}
