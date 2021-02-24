@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規制作ページ
@endsection

@section('content')
    <table>
        <form action="/hello/add" method="post">
            {{ csrf_field() }}
            <tr>
                <th>
                    userid:
                </th>
                <td>
                    <input type="text" name="userid" />
                </td>
            </tr>
            <tr>
                <th>
                    teamid:
                </th>
                <td>
                    <input type="text" name="teamid" />
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
