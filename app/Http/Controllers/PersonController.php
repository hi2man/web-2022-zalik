<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function store_person(Request $request) {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['required'],
        ]);

        $person = Person::create($validated);

        return redirect()->route('persons.show', ['person' => $person]);
    }

    
    public function update_person($person, Request $request) {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['required'],
        ]);

        $person = Person::find($person);

        $person->update($validated);

        return response()->json(['data' => [
            'first_name' => $person->first_name,
            'last_name' => $person->last_name,
            'middle_name' => $person->middle_name,
        ]]);
    }
}
