<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Albums;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        return view('shopping-cart.create-shopping-cart', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validation storage
        $request->validate([
            'cardHolder' => 'required|min:5|max:70',
            'cardNumber' => 'required|min:16|max:16',
            'cardExp' => 'required|min:7|max:7',
            'CVV' => 'required|min:3|max:3',
        ]);
        
        // Storage
        $purchase = new Purchase();
        $purchase->cardHolderName = $request->cardHolder;
        $purchase->cardNumber = $request->cardNumber;
        $purchase->cardExp = $request->cardExp;
        $purchase->CVV = $request->CVV;

        $fechaActual = Carbon::now();
        $fechaFormateada = $fechaActual->format('Y-m-d');
        $purchase->purchaseDate = $fechaFormateada;

        $user = Auth::user();
        $purchase->user_id = $user->id;

        $purchase->total = $request->price;
        $purchase->albums_id = $request->albums_id;

        $purchase->save();
        return redirect()->route('albums.index')->with('createdPurchase', 'Ok');
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

        //return view('shopping-cart.create-shopping-cart', compact('album'));
    }
}
