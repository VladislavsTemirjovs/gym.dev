<?php

namespace App\Http\Controllers;
use App\Models\competition;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\competes;
use App\Models\User;

class CompetitionController extends Controller
{
    public function showAll(): View {
        $competitions = competition::orderBy('date')->get();
        $user = User::with('competes')->find(auth()->user()->id);
        return view("competitions.all",compact('competitions','user'));
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
public function storecompt(Request $request)
{
    $competitionId = $request->input('competition_id');
    $userId = auth()->user()->id;

    // Check if the entry already exists
    $existingEntry = Competes::where('competition_id', $competitionId)
        ->where('user_id', $userId)
        ->first();

    if ($existingEntry) {
        // Entry already exists, do not create a new one
        return redirect()->route('competitions.all');
    }

    // Entry does not exist, create a new one
    $data = [
        'competition_id' => $competitionId,
        'user_id' => $userId,
    ];

    Competes::create($data);

    return redirect()->route('competitions.all');
}
    public function show($competition)
    {
        $users = User::whereIn('id', function ($query) use ($competition) {
            $query->select('user_id')
                ->from('competes')
                ->where('competition_id', $competition);
        })->get();
        $competition = Competition::findOrFail($competition);
    
        return view("competitions.competes", compact('competition','users'));
    }
}
