<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage; // 👈 important

class TemplateController extends Controller
{
    public function index()
    {
        // Récupère tous les voyages validés
        $voyages = Voyage::where('status', 'validated')
                        ->orderBy('created_at', 'desc')
                        ->get();

        // Envoie la variable à la vue
        return view('frontend.home', compact('voyages'));
    }

    public function indexgp(){
         return view('frontend.gp');
    }

    public function indexvoyagedispo()
{
    $voyages = Voyage::where('status', 'validated')->get();

    // Envoie la variable à la vue
    return view('frontend.avalaibletrip', compact('voyages'));
}


 public function aide()
{
    $voyages = Voyage::where('status', 'validated')->get();

    // Envoie la variable à la vue
    return view('frontend.aide');
}

    public function show($id)
{
    $voyage = Voyage::findOrFail($id);
    return view('frontend.voyage', compact('voyage'));
}
}
