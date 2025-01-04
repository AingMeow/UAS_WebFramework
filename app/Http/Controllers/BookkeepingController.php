<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class BookkeepingController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'attachment' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ]);

        if ($request->hasFile('attachment')) {
            $validated['attachment'] = $request->file('attachment')->store('attachments');
        }

        Record::create($validated);

        return redirect()->route('records.index')->with('success', 'Record added successfully!');
    }

    public function show(Record $record)
    {
        return view('records.show', compact('record'));
    }

    public function edit(Record $record)
    {
        return view('records.edit', compact('record'));
    }

    public function update(Request $request, Record $record)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $record->update($validated);

        return redirect()->route('records.index')->with('success', 'Record updated successfully!');
    }

    public function destroy(Record $record)
    {
        $record->delete();

        return redirect()->route('records.index')->with('success', 'Record deleted successfully!');
    }
}