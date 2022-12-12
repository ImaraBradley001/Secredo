<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class JournalContoller extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function create()
    {
        return view('journal.create');
    }


    public function store(Request $request)
    {
        //Store note data
        $formfields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        if ($request->hasFile('attachment')) {
            $formfields['attachment'] = $request->file('attachment')->store('attachments', 'public');
        }

        $formfields["user_id"] = auth()->id();

        Journal::create($formfields);

        return redirect('/journal/show')->with('message', 'Your journal has been updated succcessfully');
    }

    //->latest()->filter(request(['search'])

    public function show()
    {
        return view('journal.show', [
            'notes' => auth()->user()->journals()->latest()->filter(request(['search']))->get()
        ]);
    }

    //show edit form
    public function edit(Journal $journal)
    {
        //dd($journal->title);
        return view('journal.edit', [
            'journal' => $journal
        ]);
    }


    public function update(Request $request, Journal $journal)
    {
        // make sure logged in user is owner
        if ($journal->user_id != auth()->id()) {
            abort(403, 'Unauthorised');
        }

        $formfields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        if ($request->hasFile('attachment')) {
            $formfields['attachment'] = $request->file('attachment')->store('attachments', 'public');
        }
        $journal->update($formfields);
        return redirect('/journal/show')->with('message', 'Your journal has been updated succcessfully');
    }

    //Delete Note
    public function destroy(Journal $journal)
    {
        // make sure logged in user is owner
        if ($journal->user_id != auth()->id()) {
            abort(403, 'Unauthorised');
        }
        $journal->delete();
        return redirect('/journal/show')->with('message', 'Note deleted succcessfully');
    }
}
