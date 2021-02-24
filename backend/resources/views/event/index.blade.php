@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    イベントページ
@endsection

@section('content')
    <table>
        <tr>
            <th>
                Event
            </th>
            <th>
                Team
            </th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>
                    {{$item->eventname}}
                </td>
                <td>
                    {{$item->team->teamname}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
