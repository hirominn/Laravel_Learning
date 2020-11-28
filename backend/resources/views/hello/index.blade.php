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
    <table>
        <p>
            これは、<middleware>google.com</middleware>へのリンクです。
        </p>
        <p>
            これは、<middleware>yahoo.co.jp</middleware>へのリンクです。
        </p>
    </table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
