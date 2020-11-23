@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
        インデックスページ
@endsection

@section('content')
    <p>
        ここが本文のコンテンツです。
    </p>
    <p>
        必要なだけ記述できます。
    </p>
    @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。'])
    @each('components.item', $data, 'item')
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
