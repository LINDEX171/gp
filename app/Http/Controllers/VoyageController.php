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
            'departure1' => 'required|string|max:255',
            'arrival' => 'required|string|max:255',
            'arrival1' => 'required|string|max:255',
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
            'departure1' => $validated['departure1'],
            'arrival' => $validated['arrival'],
            'arrival1' => $validated['arrival1'],
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


public function updateStatus(Request $request, $id)
{
    $voyage = Voyage::findOrFail($id);

    // On attend un champ 'status' dans la requête
    $request->validate([
        'status' => 'required|in:pending,validated,rejected',
    ]);

    $voyage->status = $request->status;
    $voyage->save();

    return redirect()->back()->with('success', 'Statut mis à jour avec succès.');
}


public function uploadPhotos(Request $request, $id)
{
    $voyage = Voyage::findOrFail($id);

    $request->validate([
        'departure_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'arrival_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('departure_photo')) {
        $departurePhoto = $request->file('departure_photo')->store('country_photos', 'public');
        $voyage->departure_photo = $departurePhoto;
    }

    if ($request->hasFile('arrival_photo')) {
        $arrivalPhoto = $request->file('arrival_photo')->store('country_photos', 'public');
        $voyage->arrival_photo = $arrivalPhoto;
    }

    $voyage->save();

    return redirect()->back()->with('success', 'Photos mises à jour avec succès.');
}

public function updatePhoto(Request $request, $id)
{
    $voyage = Voyage::findOrFail($id);

    $request->validate([
        'departure_photo' => 'nullable|image|max:2048',
        'arrival_photo' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('departure_photo')) {
        $path = $request->file('departure_photo')->store('voyage_photos', 'public');
        $voyage->departure_photo = $path;
    }

    if ($request->hasFile('arrival_photo')) {
        $path = $request->file('arrival_photo')->store('voyage_photos', 'public');
        $voyage->arrival_photo = $path;
    }

    $voyage->save();

    return redirect()->back()->with('success', 'Photos mises à jour avec succès.');
}

public function show($id)
{
    $voyage = Voyage::findOrFail($id);
    return view('frontend.voyage', compact('voyage'));
}


public function destroy($id)
{
    $voyage = Voyage::findOrFail($id);
    $voyage->delete();

    return redirect()->back()->with('success', 'Voyage supprimé.');
}


}
