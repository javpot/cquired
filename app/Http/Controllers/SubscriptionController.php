<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Subscriptions = Subscription::all();
        return response()->json(['Subscriptions' => $Subscriptions])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Subscription = Subscription::create($request->all());
        return response()->json(['Subscription' => $Subscription], 201)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $Subscription)
    {
        return response()->json(['Subscription' => $Subscription])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $Subscription)
    {
        $Subscription->update($request->all());
        return response()->json(['Subscription' => $Subscription])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $Subscription)
    {
        $Subscription->delete();
        return response()->json(null, 204)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }
}