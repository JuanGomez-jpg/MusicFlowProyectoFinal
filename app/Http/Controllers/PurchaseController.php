<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Albums;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;
        $albums = DB::table('albums') // Obtengo los albums de las compras asociadas con los albums y las purchases no borradas con softdeletes
        ->join('purchases', 'albums.id', '=', 'purchases.albums_id')
        ->where('purchases.user_id', $userId)
        ->whereNull('purchases.deleted_at')
        ->select('albums.*')
        ->distinct()
        ->get();

        $purchasesUser = Purchase::with('user')->get();
        //$purchasesUser = Auth::user()->purchases; // Obtengo las compras
        $countPurchase = count($purchasesUser); // Longitud del arreglo
        $countAlbums = count($albums);
        $purchases = []; // Nuevo arreglo

        if ($countAlbums)
        {
            for ($i = 0; $i < $countAlbums; $i++) {
                $valor1 = $purchasesUser[$i];
                $valor2 = $albums[$i];
                $purchases[] = ['purchase' => $valor1, 'album' => $valor2];
            }
        }
        return response(view('shopping-cart.shopping-cart', compact('purchases')));
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
            'cardNumber' => 'required|integer',
            'cardExp' => 'required|min:7|max:7',
            'CVV' => 'required|integer',
        ]);
        
        // Storage
        $purchase = new Purchase();
        $purchase->cardHolderName = $request->cardHolder;
        $purchase->cardNumber = $request->cardNumber;
        $purchase->cardExp = $request->cardExp;
        $purchase->CVV = $request->CVV;

        $fechaActual = Carbon::now();
        $fechaFormateada = $fechaActual->format('d-m-Y');
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
        $purchase->delete();
        return redirect()->route('albums.index')->with('deletePurchase', 'Ok');
    }

    public function addPurchase(Request $request, Albums $album)
    {

        //return view('shopping-cart.create-shopping-cart', compact('album'));
    }
}
