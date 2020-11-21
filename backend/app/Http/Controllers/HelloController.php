<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request){
        $data = [
            'msg'=>'これはコントローラから渡されたメッセージです。',
            'id'=>$request->id
        ];
        return view('hello.index', $data); //viewは、コンテンツにテンプレート(hello/index.php)のレンダリング結果を設定したResponseインスタンスを返す
    }
}
