<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrokersResource;
use Illuminate\Http\Request;
use \App\Models\Broker;
use \App\Http\Requests\StoreBrokerRequest;

class BrokersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return BrokersResource::collection(Broker::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return BrokersResource
     */
    public function store(StoreBrokerRequest $request)
    {
        $request->validated();

        $broker = Broker::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'phone_number' => $request->phone_number,
            'logo_path' => $request->logo_path,
        ]);

        return new BrokersResource($broker);
    }

    /**
     * Display the specified resource.
     *
     * @param Broker $broker
     * @return BrokersResource
     */
    public function show(Broker $broker)
    {
        return new BrokersResource($broker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreBrokerRequest $request
     * @param Broker $broker
     * @return BrokersResource
     */
    public function update(StoreBrokerRequest $request, Broker $broker)
    {
        ray($request);
        $request->validated();

        $broker->update($request->only([
            'name', 'address', 'city', 'zip_code', 'phone_number', 'logo_path'
            ]));

        return new BrokersResource($broker);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Broker $broker
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Broker $broker)
    {
        $broker->delete();

        return response()->json([
            'success'=> true,
            'message'=> 'Broker has been deleted from database',
        ]);
    }
}
