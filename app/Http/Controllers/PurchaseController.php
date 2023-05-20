<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Albums;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return response(view('shopping-cart.shopping-cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Albums $album)
    {
        return view('shopping-cart.create-purchase', compact('album'));
        
        //return view('shopping-cart.create-purchase', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }

    public function addPurchase(Request $request, Albums $album)
    {

        return view('shopping-cart.create-shopping-cart', compact('album'));
    }
}
