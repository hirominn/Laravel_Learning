@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
    @parent
    イベント追加ページ
@endsection

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif
    <table>
        <form action="/event/add" method="post">
            {{ csrf_field() }}
            <tr>
                <th>
                    team id:
                </th>
                <td>
                    <input type="text" name="team_id" />
                </td>
            </tr>
            <tr>
                <th>
                    eventname:
                </th>
                <td>
                    <input type="text" name="eventname" />
                </td>
            </tr>
            <tr>
                <th>
                    memo:
                </th>
                <td>
                    <input type="text" name="memo" />
                </td>
            </tr>
            <tr>
                <th>

                </th>
                <td>
                    <input type="submit" value="send" />
                </td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
