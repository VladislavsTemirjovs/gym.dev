<?php

namespace App\Http\Controllers;
use App\Models\competition;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CompetitionController extends Controller
{
    public function showAll(): View {
        $competitions = competition::orderBy('date')->get();
        return view("competitions.all",compact('competitions'));
    }
    public function create(): View {
        return view('competitions.create');
    }
    public function store(Request $request) {
        $rules = [
            'title' => 'required|string|min:3|max:255',
            'place' => 'required|string|min:3|max:255',
            'date' => 'required|date',
        ];
        $validated = $request->validate($rules);
        $comp = new competition();
        $comp->title = $validated['title'];
        $comp->place = $validated['place'];
        $comp->date = $validated['date'];
        $comp->save();
        return redirect() -> route('competitions.all');
    }
    public function edit($id)
    {
    $competition = Competition::find($id);
    return view('competitions.edit', ['competition' => $competition]);
    }
    public function destroy($id)
    {
        $competition = Competition::find($id);
        $competition->delete();

        return redirect()->route('competitions.all');
    }
    public function update(Request $request, $id)
{
    $competition = Competition::find($id);

    $competition->title = $request->input('title');
    $competition->place = $request->input('place');
    $competition->date = $request->input('date');
    $competition->save();

    return redirect()->route('competitions.all');
}
public function show(Competition $competition)
    {
        return view('competitions.competes', compact('competition'));
    }
}
