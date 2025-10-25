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
}
