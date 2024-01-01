<?php

namespace App\Http\Controllers;

use App\Models\Delivery_method;
use App\Http\Requests\StoreDelivery_methodRequest;
use App\Http\Requests\UpdateDelivery_methodRequest;
use App\Services\DeliveryMethodService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeliveryMethodController extends Controller
{

    public function __construct(protected DeliveryMethodService $service)
    {
    }

    public function index()
    {
        return $this->service->index();
    }

    public function store(StoreDelivery_methodRequest $request)
    {
        return $this->service->insert($request);
    }

    public function show($id)
    {
        try {
            return $this->service->byId($id);
        } catch (ModelNotFoundException $ex) {
            return response()->json(['errroe' => "Method is not found with id : {$id}"], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery_method $delivery_method)
    {

    }
    public function update(UpdateDelivery_methodRequest $request, Delivery_method $delivery_method)
    {
    }
    public function destroy($id)
    {
        try {
            $this->service->destroy($id);
            return response()->json(['is_success' => true]);
        } catch (ModelNotFoundException $ex) {
            return response()->json(['error' => "Not found with id: {$id}"]);
        }
    }
}
