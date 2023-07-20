<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cocktails = Cocktail::paginate(10);
    // Cocktail::with('','')->all(); // per aggiungere le altre colonne
    // or Cocktail::paginate(n); // inserire numero di elementi per pagina
    // or an obj

    return response()->json($cocktails);
    }

   

    
    
    public function show(Cocktail $cocktail)
    {
        //
    }

}