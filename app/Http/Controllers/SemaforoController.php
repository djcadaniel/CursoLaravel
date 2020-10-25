<?php

namespace App\Http\Controllers;
use App\Models\Semaforo;
use Illuminate\Http\Request;

class SemaforoController extends Controller
{
    public function index(){
        $semaforos = Semaforo::latest()->get();//método para traer a todo los usuarios
        return view('semaforos.index', [//paso mi vista
            'semaforos' => $semaforos
        ]);
    }

    public function store(Request $request){
        Semaforo::create([
            'name' => $request -> name,
            'latitude' => $request -> latitude,
            'longitude' => $request -> longitude
        ]);
    }

    public function destroy(Semaforo $semaforo){
        $semaforo -> delete();

        return back();
    }
}
