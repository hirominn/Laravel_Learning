@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <table>
        <form action="/hello/edit" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$form->id}}" />
            <tr>
                <th>
                    userid:
                </th>
                <td>
                    <input type="text" name="userid" value="{{$form->userid}}" />
                </td>
            </tr>
            <tr>
                <th>
                    teamid:
                </th>
                <td>
                    <input type="text" name="teamid" value="{{$form->teamid}}" />
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
