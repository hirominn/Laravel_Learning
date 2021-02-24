@extends('layouts.helloapp')

@section('title', 'Team.Delete')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    <table>
        <form action="/team/del" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$form->id}}" />
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
                    teamname:
                </th>
                <td>
                    <input type="text" name="teamname" value="{{$form->teamname}}" />
                </td>
            </tr>
            <tr>
                <th>
                    ismyself:
                </th>
                <td>
                    <input type="number" name="ismyself" value="{{$form->ismyself}}" />
                </td>
            </tr>
            <tr>
                <th>
                    color:
                </th>
                <td>
                    <input type="text" name="color" value="{{$form->color}}" />
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
