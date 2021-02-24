<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $hasItems = Team::has('events')->get();
        $noItems = Team::doesntHave('events')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('team.index', $param);
    }

    public function find(Request $request)
    {
        return view('team.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Team::IdGreaterThan($min)
            ->idLessThan($max)
            ->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('team.find', $param);
    }

    public function add(Request $request)
    {
        return view('team.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Team::$rules);
        $team = new Team;
        $form = $request->all();
        unset($form['_token']);
        $team->fill($form)->save();
        return redirect('/team');
    }

    public function edit(Request $request)
    {
        $team = Team::find($request->id);
        return view('team.edit', ['form' => $team]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Team::$rules);
        $team = Team::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $team->fill($form)->save();
        return redirect('/team');
    }

    public function delete(Request $request)
    {
        $team = Team::find($request->id);
        return view('team.del', ['form' => $team]);
    }

    public function remove(Request $request)
    {
        Team::find($request->id)->delete();
        return redirect('/team');
    }
}
