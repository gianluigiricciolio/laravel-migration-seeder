<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
// uso libreria Carbon
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        // data di oggi
        $today = Carbon::today()->toDateString();

        // // prendo solo i treni che partono oggi
        // $trains = Train::where('data_di_partenza', $today)
        //     ->orderBy('azienda', 'ASC')
        //     ->get();

        // prendo tutti i treni (esercizio con Faker)
        $trains = Train::all();


        // trasformo in array associativo
        $data = [
            'trains' => $trains
        ];
        // dd($today);
        return view('trains', $data);
    }
}
