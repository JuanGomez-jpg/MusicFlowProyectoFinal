<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Albums;

class PDFController extends Controller
{
    public function PDF()
    {
        ini_set('max_execution_time', 500);
        $albums = Albums::all();
        $pdf = Pdf::loadView('albums.albums-report', compact('albums'));
        return $pdf->setPaper('a4', 'landscape')->stream('albums-report.pdf');
        //return $pdf->download('albums-report.pdf');
    }

}
