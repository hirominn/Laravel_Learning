<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $items = Event::with('team')->get();
        // $items = Event::all();
        return view('event.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('event.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Event::$rules);
        $event = new Event;
        $form = $request->all();
        unset($form['_token']);
        $event->fill($form)->save();
        return redirect('/event');
    }
}
