<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;

class VoyageController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'whatsapp' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'departure' => 'required|string|max:255',
            'arrival' => 'required|string|max:255',
            'departure-date' => 'required|date',
            'arrival-date' => 'required|date',
            'weight' => 'required|integer',
            'price' => 'required|numeric',
            'comment' => 'nullable|string',
        ]);

        // Créer le voyage
        Voyage::create([
            'fullname' => $validated['fullname'],
            'phone' => $validated['phone'],
            'whatsapp' => $validated['whatsapp'],
            'email' => $validated['email'],
            'departure' => $validated['departure'],
            'arrival' => $validated['arrival'],
            'departure_date' => $validated['departure-date'],
            'arrival_date' => $validated['arrival-date'],
            'weight' => $validated['weight'],
            'price' => $validated['price'],
            'comment' => $validated['comment'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Votre demande a été envoyée avec succès !');
    }


    public function index()
{
    $voyages = Voyage::orderBy('created_at', 'desc')->get();
    return view('auth.tables.index', compact('voyages'));
}


public function valider($id)
{
    $voyage = \App\Models\Voyage::findOrFail($id);
    $voyage->status = 'validated';
    $voyage->save();

    return redirect()->back()->with('success', 'Voyage validé avec succès.');
}

public function rejeter($id)
{
    $voyage = \App\Models\Voyage::findOrFail($id);
    $voyage->status = 'rejected';
    $voyage->save();

    return redirect()->back()->with('success', 'Voyage rejeté.');
}

public function destroy($id)
{
    $voyage = Voyage::findOrFail($id);
    $voyage->delete();

    return redirect()->back()->with('success', 'Voyage supprimé.');
}


}
