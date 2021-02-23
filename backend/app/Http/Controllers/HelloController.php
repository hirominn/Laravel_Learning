<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request){
        $items = DB::table('teams')
            ->orderBy('id', 'asc')
            ->get();
        // if(isset($request->id)){
        //     $param = ['id' => $request->id];
        //     $items = DB::select('select * from Users where id = :id', $param);
        // } else {
        //     $items = DB::select('select * from Users');
        // }
        return view('hello.index', ['items'=>$items]);
    }

    public function post(Request $request){
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = new Response(view('hello.index', ['msg'=>'「' . $msg . '」をクッキーに保存しました。']));
        $response->cookie('msg', $msg, 100);
        return $response;
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'userid' => $request->userid,
            'teamid' => $request->teamid,
        ];
        DB::table('Users')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $item = DB::table('Users')
            ->where('id', $request->id)
            ->first();
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from Users where id = :id', $param);
        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'userid' => $request->userid,
            'teamid' => $request->teamid,
        ];
        DB::table('Users')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $item = DB::table('Users')
            ->where('id', $request->id)
            ->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('Users')
            ->where('id', $request->id)
            ->delete();
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $page = $request->page;
        $items = DB::table('Users')
            ->offset($page * 3)
            ->limit(3)
            ->get();
        // $min = $request->min;
        // $max = $request->max;
        // $items = DB::table('Users')
        //     ->whereRaw('userid >= ? and userid <= ?', [$min, $max])->get();

        // $teamid = $request->teamid;
        // $items = DB::table('Users')
        //     ->where('teamid', 'like', '%' . $teamid . '%')
        //     ->orWhere('teamid', 'like', '%' . $teamid . '%')
        //     ->get();
        return view('hello.show', ['items' => $items]);
    }

    public function rest(Request $request)
    {
        return view('hello.rest');
    }

    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }
}
