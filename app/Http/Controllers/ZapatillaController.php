<?php

namespace App\Http\Controllers;

use App\Models\Zapatilla;
use Illuminate\Http\Request;

class ZapatillaController extends Controller
{
    public function index(){
        $zapatillas = Zapatilla::latest()->get();

        return view('zapatillas.index',[
            'zapatillas' => $zapatillas
        ]);
    }   
    
    public function store(Request $request){

        $request->validate([
            'name' => ['required'],
            'marca' => ['required'],
            'color' => ['required'],
            'precio' => ['required']
        ]);

        

        Zapatilla::create([
            'name' => $request->name,
            'marca' => $request->name,
            'color' => $request->name,
            'precio' => $request->name,
        ]);

        return back();
    }

    public function destroy(Zapatilla $zapatilla){
        $zapatilla -> delete();

        return back();
    }
}
