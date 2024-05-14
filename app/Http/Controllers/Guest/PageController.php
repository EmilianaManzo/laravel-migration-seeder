<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function paginaTreni(){
        // cosi mi da errore
        // $trains = Train::all()->paginate(20);
        // $trains = Train::orderBy('agency)->get()->paginate(20);

        // senza all funziona e le prende tutte
        $trains = Train::orderBy('agency')->paginate(20);

        return view('trains', compact('trains'));
    }
}
