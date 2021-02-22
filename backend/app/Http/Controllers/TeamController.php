<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $items = Team::all();
        return view('team.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('team.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Team::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('team.find', $param);
    }
}
