<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(){
        $data = [
            'msg'=>'これはBladeを用いたサンプルです。',
        ];
        return view('hello.index', $data); //viewは、コンテンツにテンプレート(hello/index.blade.php)のレンダリング結果を設定したResponseインスタンスを返す
    }

    public function post(Request $request){
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは、' . $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }
}
