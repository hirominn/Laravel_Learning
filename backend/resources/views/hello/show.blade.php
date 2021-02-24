@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    @if($items != null)
        @foreach($items as $item)
        <table width="700px">
            <tr>
                <th width="50px">
                    id:
                </th>
                <td width="50px">
                    {{$item->id}}
                </td>
                <th width="50px">
                    userid:
                </th>
                <td width="50px">
                    {{$item->userid}}
                </td>
                <th width="60px">
                    teamid:
                </th>
                <td>
                    {{$item->teamid}}
                </td>
            </tr>
        </table>
        @endforeach
    @endif
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
