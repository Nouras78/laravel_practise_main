<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DrinkController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $drinks = Drink::all();
        return view('drinks.index', compact('drinks'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('drinks.create');
    }

    // Store a newly created resource in storage
    public function store(Request  $request)
    {
        $drink = $request->validate([
            'name' => 'required|string|min:1|max:100',
            'price' => 'required|integer|min:1|max:100',
            'color' => 'required|string|min:1|max:100',
            'contents' => 'required|integer|min:1|max:1000',
            'merk' => 'required|string|min:1|max:100',
        ]);

        Drink::create($drink);
        return redirect('/drinks');
    }

    // Display the specified resource
    public function show(Drink $drink)
    {
        return view('drinks.show', compact('drink'));
    }

    // Show the form for editing the specified resource
    public function edit(Drink $drink)
    {
        return view('drinks.update', compact(('drink')));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
{
    $data = $request->validate([
        'name' => 'required|string|min:1|max:100',
        'price' => 'required|integer|min:1|max:100',
        'color' => 'required|string|min:1|max:100',
        'contents' => 'required|integer|min:1|max:1000',
        'merk' => 'required|string|min:1|max:100',
    ]);

    $drink = Drink::findOrFail($id); // Find the drink by its ID

    $drink->update($data); // Update the drink with the validated data

    return redirect('/drinks'); // Redirect back to the drinks list
}


    // Remove the specified resource from storage
    public function destroy($id)
    {
        $drink = Drink::findOrFail($id); // Find the drink by its ID
    
        $drink->delete(); // Delete the drink
    
        return redirect('/drinks'); // Redirect back to the drinks list
    }

}
